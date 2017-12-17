### Classes


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

With Juliar, you don't need to use "new" to create an instance of a class.
```
class node = {
    int data;
}

function main() = {
    node one;
    one::data;
}
```


The initialization function in className must much the classname.