# Classes


## Simple Classes

Classes are very easy to create.
Classes are defined:

```
class ClassName = {
	function className(string s) = {
         doSomething();
     }
}
```

With Juliar, you don't need to use "new" to create an instance of a class instead just declare a variable
and it will automatically assign the appropriate class.
```
class node = {
    int data;
}

function main() = {
    node one;
    one::data = 3;
    
    printLine(one::data);
}
```


The initialization function in "ClassName" should match the "classname" i.e.
all classes should have the first letter capitalized, the inner functions should
have the first letter start with lowercase.