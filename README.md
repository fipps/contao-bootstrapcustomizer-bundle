# Contao Bootstrap CSS Customizer

This extension allows you to create Bootstrap CSS Themes, which are easy to integrate into your layout.

SCSSPHP does not implenent postprocessors, which are needed to add vendor prefixes. Therefore, we recommend using _agoat/autoprefixer_.  
_agoat/autoprefixer_ works with nodejs only. If you do not have access to nodejs, you can use _--prefix-free_, which is included in this package.
 
We also recommend installing _contao-bootstrap/bundle_.
 
If you also install _fipps/contao-parallax-bundle_ you'll get an awesome parallax effect for background images based on boostraps animation.
 
**Advantages**  
You can add as many colors to your color system as you want.  
We have also added **vertical navigation** and a **side menu**, which integrates seamless in you navigation bar.  
Only components you want to use are compiled into a css file.  
Change **colors, margins, borders or breakpoints** within your contao backend.  

Now create your own Bootstrap theme and select the theme within your layout. Check either _autoprefix_ or _prefixfree_.

**Have fun!!**


---
https://github.com/agoat/contao-autoprefixer
http://leaverou.github.io/prefixfree/