# Contao Bootstrap CSS Customizer

This extension allows to create Bootstrap CSS Themes, which are easy to integrate info your layout.

Because SCSSPHP do not implement a postprocessor which is needed to add vendor prefixes, we recommend to use _agoat/autoprefixer_.
_agoat/autoprefixer_ works with nodejs only. If you do not have access to nodejs, you can use prefix free, which is added to this package.
 
We also recommend to install _contao-bootstrap/bundle_.
 
**Advantages** 
As there is no **tertiary** color in Bootstraps color system, we'va added a tertiary color. It can be used like the primary or scondary color.
And we added a **vertical navigation** with subnavigation toppler.
Only components you want to use are compiled into a css file. 
Change **colors, margins, borders or breakpoints** within your contao backend.

Now create your own Bootstrap theme and select the theme within your layout. Check either _autoprefix_ or _prefixfree_.

**Have fun!!**