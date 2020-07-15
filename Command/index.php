<?php

require_once 'Editor.php';
require_once 'App.php';

require_once 'command/Command.php';
require_once 'command/CutCommand.php';
require_once 'command/CopyCommand.php';
require_once 'command/PasteCommand.php';

$text = "Hello world";

$editor = new Editor($text);
$app = new App();

$app->executeCommand(new CopyCommand($editor, 0, 4));
echo $editor->getText() . PHP_EOL;          // Hello world
echo $editor->getClipboard() . PHP_EOL;     // Hell

$app->executeCommand(new CutCommand($editor, 0, 4));
echo $editor->getText() . PHP_EOL;          // o world

$app->executeCommand(new PasteCommand($editor, 1));
echo $editor->getText() . PHP_EOL;          // oHell world

$app->undo();
echo $editor->getText() . PHP_EOL;          // o world

$app->undo();
echo $editor->getText() . PHP_EOL;          // Hello world

$app->redo();
echo $editor->getText() . PHP_EOL;          // o world

$app->redo();
echo $editor->getText() . PHP_EOL;          // oHell world



