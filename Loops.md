# Loops

## While loop

In Juliar, while loop is defined similarly to most of the other
programming languages.

A simple example of while loop:

```
int x = 0;
while(x < 2) {
    x = + 1 x;
}
```

In this example x is set to 0. The `while` statement checks 
and sees that x must be less than 2 and returns true.
The while loop runs. The value of x is increase by 1.
This is a Juliar way of increasing values. The `while` loop
only runs twice. 


## Break
You are allowed to run an infinite loop. However, you should have a break statement to exit the loop

A simple example of break:
```
int x = 0;
while( 1 ){
    x = + 1 x;
    if ( x > 2) {
        break;
    }
}
```

Although breaks are not recommended, they do provide a convenient and easy way to break a while loop.