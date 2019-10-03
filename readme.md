drigz one - a wp theme
======================
_documentation v 0.0.1_

HTML elements
-------------

`<header></header>` -Used for any primary header elements. A thematic grouping of content, typically with a heading.

`<nav></nav>` - Used for any navigation item i.e. Main Navigation, Footer Navigation, Next and Previous Navigation.

`<article></article>` - Content that can stand alone by itself.

`<section></section>` - To divide chunks of information within an article.

`<aside></aside>` - Frequently presented as sidebars.

`<footer></footer>` -

CSS selectors
-------------

`.grid` - parent container.

- `.grid-block` - child container and groups items into blocks.

`.card` - item card parent container.

_*Modification example_

    .card {
        h2 {
            /* Rule Sets*/
            size:;
            color:;
        }
        p {
            /* Rule Sets*/
            size:;
            color:;
        }
    }

### Miscellaneous
Prefix:
- `.do-` - (d)rigz (o)ne for custom rulesets specifically for this theme.

### Sample Layout

    <div class="grid">
        <div class="grid-block">
            <div class="card">
                <img src="" alt="">
                <h2>An awesome title</h2>
                <p>An interseting paragraph resides in this space.</p>
            </div>
        </div>
    </div>

Scripts
------

**helper-scripts.js**
- smooth scroll
- add remove class
