<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2018/11/13
 * Time: 下午12:09
 */

use Phalcon\Cli\Task;

class MainTask extends Task
{
    public function mainAction()
    {
        echo '默认task' . PHP_EOL;
    }

    public function testAction(array $params)
    {
        echo sprintf('参数1： %s', $params[0]);

        echo PHP_EOL;

        echo sprintf('参数2 %s', $params[1]);

        echo PHP_EOL;
    }
}