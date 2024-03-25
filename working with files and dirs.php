//https://www.php.net/manual/en/ref.filesystem.php
<?php
#                    <<-- FILE OPEN MODES -->>

/**
 * these modes used with fopen() function.
 * r  => read only.
 * w  => write only, force new file.
 * a  => write only with pointer at the end.
 * x  => write only, create new file or error on existing.
 * r+ => read/write, pointer at beginning.
 * w+ => read/write, force new file.
 * a+ => read/write, pointer at end.
 * x+ => read/write, create new file or error on existing.
 */

#                    <<-- WRITING TO A FILE -->>

##Writing bytes as needed
// $file = fopen('file.txt', 'w') or die("Unable to open file");
// fwrite($file, 'Hello World!!!');
// fclose($file);

##Writing the entire contents at once
// file_put_contents('file.txt', "Hello World, \n next line");


#                    <<-- READING FROM A FILE -->>

##Read bytes

// $filename = 'file.txt';
// $file = fopen($filename, 'r');
// $size = filesize($filename);
// $contents = fread($file, $size);
// echo $contents . "\n";
// // You can check for EOF with `feof()`
// echo feof($file);
##Reade entire file at once

// $contents = file_get_contents('file.txt');
// echo $contents;

##Reading all lines of a text file (get an array containing each line of a file)

// $lines = file('file.txt'); // Each line will still have it's line ending character

// print_r($lines);

#                    <<-- COMMON FILE TASKS -->>
//remove file
//unlink('file.txt');
//copy file
//copy('foo.txt', 'bar.txt');
//move file
//rename('foo.txt', 'bar.txt');
//Get filesize
// echo filesize('file.txt'); // get filesize in bytes

//check if file exist
// echo file_exists('file.txt');

//get an exclusive lock on a file
/**
 * this is useful when you want to ensure that only one write operation is happening at a time.
 */

// $file = fopen('file.txt', 'a');
// flock($file, LOCK_EX);
// fwrite($file, 'test\n');
// flock($file, LOCK_UN);
// fclose($file);


#                    <<-- WORKING WITH JSON -->>
//store php object as a json string
// file_put_contents('file.txt', json_encode([2, 4, 6]));
// //read json string in to a php object
// $arr = json_decode(file_get_contents('file1.json'));
// print_r($arr);

#                    <<-- READING AND WRITING FROM STDIN, STDOUT, STDERR-->>
// fwrite(STDOUT, "Hello, world\n"); //write to consol
// fwrite(STDERR, "Hello, error! Enter some text:\n");
// $input = fread(STDIN, 1024);
// fwrite(STDOUT, "input received: $input \n");

#                    <<-- CHECK IF FILE IS DIR-->>
// echo is_dir('../test');
#                    <<-- GET CURRENT WORKING DIR-->>
// echo getcwd();
#                    <<-- GET THE DIR THAT PHP FILES IS IN-->>
// echo __DIR__;
#                    <<-- GET THE PATH OF THE PHP FILE BEING EXECUTED-->>
// echo __FILE__;
#                    <<-- CHANGE CURRENT DIR-->>
// chdir('../dashboard');
// echo getcwd();
#                    <<-- CREATE DIR-->>
// mkdir('new_dir');
#                    <<-- REMOVE DIR-->>
// rmdir('new_dir');
#                    <<-- GET DIR CONTENTS-->>
/**
 * scandir() => return all contents of a directory
 * glob()    => lets you search for contents in a directory
 */

// $contents = scandir('.');
// print_r($contents);

// $all_contents = glob('*');
// print_r($all_contents);

// $json_files = glob('*.json');
// print_r($json_files);
