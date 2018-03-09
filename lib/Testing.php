<?php

class Testing
{
    /** @var bool テスト失敗停止するか */
    private $stop_on_failure = false;
    /** @var array[] 実行結果 */
    private $result = [];
    /** @var bool PoserAssertとして出力するか */
    private $power_assert = true;

    public function __construct(array $options)
    {
        $this->stop_on_failure = $options['stop_on_failure'] ?? false;
    }

    public function handler($file, $line, $code, $desc = null)
    {
        $this->result[] = [$file, $line, $desc];

        if ($this->stop_on_failure) $this->finalize();
    }

    public function finalize(): void
    {
        if ($this->result) {
            foreach ($this->result as [$file, $line, $desc]) {
                $this->output($file, $line, $desc);
            }
            exit(1);
        }

        $this->result = [];

        echo 'ok.', PHP_EOL;
        exit(1);
    }

    private function output($file, $line, $desc): void
    {
        $code = trim(file($file)[$line-1]);

        /** @var array|false $vars */
        $vars = false;

        if (substr($desc, 0, 2) === 'a:') {
            $vars = @unserialize($desc);
        }

        echo "FILE: {$file} ({$line})", PHP_EOL;
        echo "CODE: {$code}", PHP_EOL;

        if ($vars === false) {
            echo "DESC: {$desc}", PHP_EOL;
            return;
        }

        if (preg_match_all('/\$(?<name>\w+)/', $code, $matches, PREG_OFFSET_CAPTURE)) {

            if ($this->power_assert) {
                $this->outputVariables($matches, $vars);
            }
        }

        echo PHP_EOL;
    }

    private function outputVariables($matches, $vars)
    {
        $offsets = array_column($matches['name'], 1);

        foreach (array_reverse($matches['name']) as [$name]) {
            $current_position = array_pop($offsets);
            $padding = str_repeat(" ", $current_position + 5);
            foreach ($offsets as $p) {
                $padding[$p+5] = '|';
            }

            echo $padding;
            echo "└ ";
            dump($vars[$name]);
        }

    }
}
