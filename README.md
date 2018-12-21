# Contao Bootstrap CSS Customizer

This extension allows you to create Bootstrap CSS Themes, which are easy to integrate into your layout.

SCSSPHP does not implenent postprocessors, which are needed to add vendor prefixes. Therefore, we recommend using _agoat/autoprefixer_.  
_agoat/autoprefixer_ works with nodejs only. If you do not have access to nodejs, you can use _--prefix-free_, which is included in this package.
 
We also recommend installing _contao-bootstrap/bundle_.
 
**Advantages**  
As there is no **tertiary** color in Bootstrap's color system, we've added a tertiary color. It can be used as the primary or secondary color.  
We have also added **vertical navigation** with a subnavigation toggler.  
Only components you want to use are compiled into a css file.  
Change **colors, margins, borders or breakpoints** within your contao backend.  

Now create your own Bootstrap theme and select the theme within your layout. Check either _autoprefix_ or _prefixfree_.

**Have fun!!**


---
https://github.com/agoat/contao-autoprefixer
http://leaverou.github.io/prefixfree/