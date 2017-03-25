# Strings

There are three ways to define strings in Juliar.  
You can use `'`, `"`, and <code>`</code>.

## When to use <code>`</code> ?

This feature was added because Juliar can be used as a web server processor.
When doing websites HTML is most prevelant language. HTML allows you to use
both `'` and `"` which will make it difficult to filter out all elements, especially
if you are copying and pasting a huge chunk of HTML code.

With backticks, you can copy and pase the code raw.
For example:

`<div id="row"><p class='button'></p></div>`

with `'` and `"` you would have to escape (either row or button) or you
would have to change everything to `'` or `"`. This may prove difficult.  
With Juliar, you can do <code>`</code> where you don't have to escape anything.
Everything gets copied.

## Concatenating Strings with other strings

Concatenating strings is very easy in Juliar. There are two ways to concatenate
string. You can do the traditional way where you have something like:

`print("Hello" + "World" + "How" + "is" + "it" + "going?");`

But Juliar has a fun new way to concatenate string. Due to its prefix nature,
You can do this:

`print(+ "Hello" "World" "How" "is" "it" "going?");`

This is perfectly legitimate statement in Juliar.

## Concatenating Strings with a number

Whenever you concatenate string with a number, the end result will be string.
The numbers are implicitly converted into strings. Then strings concatenate
regularly as mentioned in previous section.