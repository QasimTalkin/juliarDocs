### Opening Files

## fileOpen

Juliar uses a simple command to open files: fileOpen().
A simple example:

string x = fileOpen("./test.jrl");

This will open up the file `test.jrl` and store all the contents into the string x. Then you can do whatever you want with the string x.


## __getByteFromString

__getByteFromString extracts a byte from a string. 
A simple example:

> int index = 0;
> int boo = 0;
> while ( boo == 0){
>    string y = __getByteFromString(file, index);
>    printLine(y);
>    index = + index 1;
> }

This will print out the whole string using a loop.