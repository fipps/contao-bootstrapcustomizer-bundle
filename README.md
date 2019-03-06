# Contao Bootstrap CSS Customizer

This extension allows you to create Bootstrap CSS Themes, which are easy to integrate into your layout.

SCSSPHP does not implenent postprocessors, which are needed to add vendor prefixes. Therefore, we recommend using _agoat/autoprefixer_.  
_agoat/autoprefixer_ works with nodejs only. If you do not have access to nodejs, you can use _--prefix-free_, which is a requirement in this package.
 
We also recommend installing _contao-bootstrap/bundle_.
 
If you also install _fipps/contao-parallax-bundle_ you'll get an awesome parallax effect for background images based on boostraps animation.
 
## Advantages  
### Colorsystem
You can add as many colors to your color system as you want.  

### Vertical Navigation with Responsive Side Menu 
We have also added **vertical navigation** and a **side menu**, which integrates seamless in you navigation bar.  
Only components you want to use are compiled into a css file.  
Change **colors, margins, borders or breakpoints** within your contao backend.  

### New rudimentary CSS Grid Classes  
We'va added some css classes to implement css grid system next to bootstraps flexbox:  
- `grid-[1..12]` for a grid system with 1 to 12 columns.  
You can use the bootstrap breakpoints like *grid-sm-6* for six columns at breakpoint sm and above.
- `grid-square` with `style='aspect-ratio: cols/rows'`  for a square gridsystem. The aspect ration defines how many cols amd rows the element should take.  
Example:  
````html
<div class="grid-4 grid-square">
    <div style="aspect-ratio: 1/2"
        <div>This element is 1 col width and 2 rows high</div>
    </div>
    <div style="aspect-ratio: 2/1"
        <div>This element is 2 col width and 1 rows high</div>
    </div>
    <div style="aspect-ratio: 2/2"
        <div>This element is 2 col width and 2 rows high</div>
    </div>    
</div>
````
- `grid-flow-[c|r|d|cd|rd]` to control the flow behaviour (you can use breakpoints like `grid-md-flow-c`):
  - *c*: column
  - *r*: row
  - *d*: dense
  - *cd*: column dense
  - *rd*: row dense


Now create your own Bootstrap theme and select the theme within your layout. Check either _autoprefix_ or _prefixfree_.

**Have fun!!**


---
https://github.com/agoat/contao-autoprefixer
http://leaverou.github.io/prefixfree/