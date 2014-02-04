<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <?php $this->widget('my.widgets.CascadeFr.CascadeFr'); ?>

    <title>Cascade Framework</title>
    <meta name="description" content="Professional Frontend framework that makes building websites easier than ever.">
    <!--    <link rel="shortcut icon" href="../vendor/assets/img/favicon.ico" type="image/x-icon" />-->
    <meta name="viewport" content="width=device-width">
    <style type="text/css">

    </style>
</head>
<body class="narrow">


<div class="site-center">
<div class="site-body">
<div class="site-header">
    <div class="tags sitemenutags">
        <div class="cell">
            <ul class="nav blocks">
                <li><a href="https://github.com/jslegers/cascadeframework/archive/master.zip">Download v1.0</a></li>
            </ul>
        </div>
    </div>
    <div class="col width-fill sitemenu">
        <div class="col width-fit mobile-sizefit">
            <div class="cell">
                <a href="index.html" class="logo"></a>
            </div>
        </div>
        <div class="col width-fill mobile-sizefill">
            <div class="cell">
                <ul class="nav">
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li class="active"><a href="components.html">Components</a></li>
                    <li><a href="templates.html">Templates</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col">
<div class="cell">
<div class="col">
    <div class="cell">
        <div class="page-header">
            <h1>Components
                <small>documentation</small>
            </h1>
        </div>
    </div>
</div>
<div class="col width-1of4">
    <div class="cell menu">
        <span class="tiny">Component types</span>
        <ul class="left nav links">
            <li class="active"><a href="components.html">Panels</a></li>
            <li><a href="components-tabblocks.html">Tab blocks</a></li>
            <li><a href="components-tables.html">Tables</a></li>
            <li><a href="components-navigation.html">Navigation</a></li>
        </ul>
    </div>
</div>
<div class="col width-fill">


<div class="col">
    <div class="cell">
        <h2>Basic panels</h2>

        <p>A panel is a simple component that has at least one body. It can optionally have one or more headers and one
            of more footers.</p>
    </div>
</div>
<div class="col">
    <div class="cell panel">
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="cell panel">
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell panel">
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell panel">
                        <div class="header">
                            Header
                        </div>
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell panel">
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                        <div class="footer">
                            Header
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell panel">
                        <div class="header">
                            Header
                        </div>
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                        <div class="footer">
                            Footer
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell panel">
                        <div class="header">
                            Header
                        </div>
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                        <div class="footer">
                            Footer
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell panel">
                        <div class="header">
                            Header
                        </div>
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                        <div class="header">
                            Header
                        </div>
                        <div class="body">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                        <div class="footer">
                            Footer
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell panel">
                        <div class="header">
                            Header
                        </div>
                        <div class="body">
                            <div class="col width-1of2">
                                <div class="cell">
                                    This is a panel body.
                                </div>
                            </div>
                            <div class="col width-fill">
                                <div class="cell">
                                    This is a panel body.
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="col width-1of3">
                                <div class="cell">
                                    This is a panel body.
                                </div>
                            </div>
                            <div class="col width-1of3">
                                <div class="cell">
                                    This is a panel body.
                                </div>
                            </div>
                            <div class="col width-fill">
                                <div class="cell">
                                    This is a panel body.
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            Footer
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col">
    <div class="cell">
        <h2>Nesting</h2>

        <p>Panels can be infinitely nested.</p>
    </div>
</div>
<div class="col">
    <div class="cell panel">
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="cell panel">
                        <div class="header">
                            Header
                        </div>
                        <div class="body">
                            <div class="col width-1of2">
                                <div class="cell panel">
                                    <div class="header">
                                        Header
                                    </div>
                                    <div class="body">
                                        <div class="cell">
                                            This is a panel body.
                                        </div>
                                    </div>
                                    <div class="footer">
                                        Footer
                                    </div>
                                </div>
                            </div>
                            <div class="col width-fill">
                                <div class="cell panel">
                                    <div class="header">
                                        Header
                                    </div>
                                    <div class="body">
                                        <div class="cell">
                                            This is a panel body.
                                        </div>
                                    </div>
                                    <div class="footer">
                                        Footer
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="cell panel">
                                    <div class="header">
                                        Header
                                    </div>
                                    <div class="body">
                                        <div class="col width-1of2">
                                            <div class="cell panel">
                                                <div class="header">
                                                    Header
                                                </div>
                                                <div class="body">
                                                    <div class="cell">
                                                        This is a panel body.
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    Footer
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col width-fill">
                                            <div class="cell panel">
                                                <div class="header">
                                                    Header
                                                </div>
                                                <div class="body">
                                                    <div class="cell">
                                                        This is a panel body.
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    Footer
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col">
    <div class="cell">
        <h2>Collapsing</h2>

        <p>Collapsing is a generic behavior supported by Cascade Framework's JS layer, and is very useful for hiding and
            showing panel data.</p>
    </div>
</div>
<div class="col">
    <div class="cell panel">
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="cell collapsible panel">
                        <div class="header collapse-trigger">
                            <span class="icon icon-collapse"></span>
                            <a href="#">
                                <span class="collapsed-only">Show</span>
                                <span class="uncollapsed-only">Hide</span> panel
                            </a>
                        </div>
                        <div class="body collapse-section">
                            <div class="cell">
                                This is a panel body.
                            </div>
                        </div>
                        <div class="footer collapse-section">
                            Header
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="panel cell">
                        <div class="collapsible">
                            <div class="header collapse-trigger">
                                <span class="icon icon-collapse"></span>
                                <a href="#">
                                    <span class="collapsed-only">Show</span>
                                    <span class="uncollapsed-only">Hide</span> panel
                                </a>
                            </div>
                            <div class="body collapse-section">
                                <div class="cell">
                                    This is a panel body.
                                </div>
                            </div>
                        </div>
                        <div class="collapsible">
                            <div class="header collapse-trigger">
                                <span class="icon icon-collapse"></span>
                                <a href="#">
                                    <span class="collapsed-only">Show</span>
                                    <span class="uncollapsed-only">Hide</span> panel
                                </a>
                            </div>
                            <div class="body collapse-section">
                                <div class="cell">
                                    This is a panel body.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell collapsible panel">
                        <div class="header collapse-trigger">
                            <span class="icon icon-collapse"></span>
                            <a href="#">
                                <span class="collapsed-only">Show</span>
                                <span class="uncollapsed-only">Hide</span> panel
                            </a>
                        </div>
                        <div class="body collapse-section">
                            <div class="cell">
                                <div class="col">
                                    <div class="cell collapsible panel">
                                        <div class="header collapse-trigger">
                                            <span class="icon icon-collapse"></span>
                                            <a href="#">
                                                <span class="collapsed-only">Show</span>
                                                <span class="uncollapsed-only">Hide</span> panel
                                            </a>
                                        </div>
                                        <div class="body collapse-section">
                                            <div class="cell">
                                                <div class="col">
                                                    <div class="col width-1of2">
                                                        <div class="cell collapsible panel collapsed">
                                                            <div class="header collapse-trigger">
                                                                <span class="icon icon-collapse"></span>
                                                                <a href="#">
                                                                    <span class="collapsed-only">Show</span>
                                                                    <span class="uncollapsed-only">Hide</span> panel
                                                                </a>
                                                            </div>
                                                            <div class="body collapse-section">
                                                                <div class="cell">
                                                                    This is a panel body.
                                                                </div>
                                                            </div>
                                                            <div class="footer collapse-section">
                                                                Header
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col width-fill">
                                                        <div class="cell collapsible panel collapsed">
                                                            <div class="header collapse-trigger">
                                                                <span class="icon icon-collapse"></span>
                                                                <a href="#">
                                                                    <span class="collapsed-only">Show</span>
                                                                    <span class="uncollapsed-only">Hide</span> panel
                                                                </a>
                                                            </div>
                                                            <div class="body collapse-section">
                                                                <div class="cell">
                                                                    This is a panel body.
                                                                </div>
                                                            </div>
                                                            <div class="footer collapse-section">
                                                                Header
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="col width-1of2">
                                                        <div class="cell collapsible panel collapsed">
                                                            <div class="header collapse-trigger">
                                                                <span class="icon icon-collapse"></span>
                                                                <a href="#">
                                                                    <span class="collapsed-only">Show</span>
                                                                    <span class="uncollapsed-only">Hide</span> panel
                                                                </a>
                                                            </div>
                                                            <div class="body collapse-section">
                                                                <div class="cell">
                                                                    This is a panel body.
                                                                </div>
                                                            </div>
                                                            <div class="footer collapse-section">
                                                                Header
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col width-fill">
                                                        <div class="cell collapsible panel collapsed">
                                                            <div class="header collapse-trigger">
                                                                <span class="icon icon-collapse"></span>
                                                                <a href="#">
                                                                    <span class="collapsed-only">Show</span>
                                                                    <span class="uncollapsed-only">Hide</span> panel
                                                                </a>
                                                            </div>
                                                            <div class="body collapse-section">
                                                                <div class="cell">
                                                                    This is a panel body.
                                                                </div>
                                                            </div>
                                                            <div class="footer collapse-section">
                                                                Header
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer collapse-section">
                                            Header
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer collapse-section">
                            Header
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col">
    <div class="cell">
        <h2>Examples</h2>

        <p>Herebelow are some common use cases for panels.</p>
    </div>
</div>
<div class="col">
<div class="cell panel">
<div class="body">
<div class="cell">
<div class="col">
    <div class="panel cell collapsible">
        <div class="header collapse-trigger">
            <span class="icon icon-collapse"></span>
            <a href="#">
                <span class="collapsed-only">Show</span>
                <span class="uncollapsed-only">Hide</span> panel
            </a>
        </div>
        <div class="menu collapse-section">
            <div class="header">
                <ul class="nav">
                    <li class="active"><a href="#">Item one</a></li>
                    <li><a href="#">Item two</a></li>
                    <li><a href="#">Item three</a></li>
                    <li><a href="#">Item four</a></li>
                    <li><a href="#">Item five</a></li>
                </ul>
            </div>
        </div>
        <div class="body collapse-section">
            <div class="cell">
                <p class="no-margin"><img src="../vendor/assets/img/stats.gif" class="top-left-image">Sed ut
                    perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo.</p>

            </div>
        </div>
        <div class="footer collapse-section">Footer</div>
    </div>
</div>
<div class="col width-1of2">
    <div class="panel cell">
        <div class="header">Repo list</div>
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="col width-fit mobile-sizefit"><span class="icon icon-bookmark color-blue"></span></div>
                    <div class="col width-fill mobile-sizefill">
                                                                    <span class="float-right">
                                                                        <span class="text">
                                                                            123
                                                                        </span>
                                                                        <span
                                                                            class="icon icon-star color-yellow"></span>
                                                                    </span>

                        <div class="col width-fill mobile-sizefill">
                            <a class="fatty" href="#">Repo 1</a>
                        </div>
                        <div class="col">This is one of my coolest repos.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="col width-fit mobile-sizefit"><span class="icon icon-bookmark color-blue"></span></div>
                    <div class="col width-fill mobile-sizefill">
                                                                    <span class="float-right">
                                                                        <span class="text">
                                                                            123
                                                                        </span>
                                                                        <span
                                                                            class="icon icon-star color-yellow"></span>
                                                                    </span>

                        <div class="col width-fill mobile-sizefill">
                            <a class="fatty" href="#">Repo 2</a>
                        </div>
                        <div class="col">This is one of my coolest repos.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="col width-fit mobile-sizefit"><span class="icon icon-bookmark color-blue"></span></div>
                    <div class="col width-fill mobile-sizefill">
                                                                    <span class="float-right">
                                                                        <span class="text">
                                                                            123
                                                                        </span>
                                                                        <span
                                                                            class="icon icon-star color-yellow"></span>
                                                                    </span>

                        <div class="col width-fill mobile-sizefill">
                            <a class="fatty" href="#">Repo 3</a>
                        </div>
                        <div class="col">This is one of my coolest repos.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="col width-fit mobile-sizefit"><span class="icon icon-bookmark color-blue"></span></div>
                    <div class="col width-fill mobile-sizefill">
                                                                    <span class="float-right">
                                                                        <span class="text">
                                                                            123
                                                                        </span>
                                                                        <span
                                                                            class="icon icon-star color-yellow"></span>
                                                                    </span>

                        <div class="col width-fill mobile-sizefill">
                            <a class="fatty" href="#">Repo 4</a>
                        </div>
                        <div class="col">This is one of my coolest repos.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col width-fill">
    <div class="panel cell">
        <div class="header">Repo list</div>
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="col width-fit mobile-sizefit"><span class="icon icon-bookmark color-blue"></span></div>
                    <div class="col width-fill mobile-sizefill">
                                                                    <span class="float-right">
                                                                        <span class="text">
                                                                            123
                                                                        </span>
                                                                        <span
                                                                            class="icon icon-star color-yellow"></span>
                                                                    </span>

                        <div class="col width-fill mobile-sizefill">
                            <a class="fatty" href="#">Repo 5</a>
                        </div>
                        <div class="col">This is one of my coolest repos.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="col width-fit mobile-sizefit"><span class="icon icon-bookmark color-blue"></span></div>
                    <div class="col width-fill mobile-sizefill">
                                                                    <span class="float-right">
                                                                        <span class="text">
                                                                            123
                                                                        </span>
                                                                        <span
                                                                            class="icon icon-star color-yellow"></span>
                                                                    </span>

                        <div class="col width-fill mobile-sizefill">
                            <a class="fatty" href="#">Repo 6</a>
                        </div>
                        <div class="col">This is one of my coolest repos.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="col width-fit mobile-sizefit"><span class="icon icon-bookmark color-blue"></span></div>
                    <div class="col width-fill mobile-sizefill">
                                                                    <span class="float-right">
                                                                        <span class="text">
                                                                            123
                                                                        </span>
                                                                        <span
                                                                            class="icon icon-star color-yellow"></span>
                                                                    </span>

                        <div class="col width-fill mobile-sizefill">
                            <a class="fatty" href="#">Repo 7</a>
                        </div>
                        <div class="col">This is one of my coolest repos.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="cell">
                <div class="col">
                    <div class="col width-fit mobile-sizefit"><span class="icon icon-bookmark color-blue"></span></div>
                    <div class="col width-fill mobile-sizefill">
                                                                    <span class="float-right">
                                                                        <span class="text">
                                                                            123
                                                                        </span>
                                                                        <span
                                                                            class="icon icon-star color-yellow"></span>
                                                                    </span>

                        <div class="col width-fill mobile-sizefill">
                            <a class="fatty" href="#">Repo 8</a>
                        </div>
                        <div class="col">This is one of my coolest repos.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col">
    <div class="cell panel">
        <div class="header">
            Form to fill in
        </div>
        <div class="body">
            <div class="cell">
                <form>
                    <div class="col">
                        <div class="col width-1of4">
                            <div class="cell">
                                <label for="firstname">First name</label>
                            </div>
                        </div>
                        <div class="col width-fill">
                            <div class="cell">
                                <input type="text" id="firstname" placeholder="Your first name" class="text">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col width-1of4">
                            <div class="cell">
                                <label for="lastname">Last name</label>
                            </div>
                        </div>
                        <div class="col width-fill">
                            <div class="cell">
                                <input type="text" id="lastname" placeholder="Your last name" class="text">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col width-1of4">
                            <div class="cell">
                                <label for="country">Country</label>
                            </div>
                        </div>
                        <div class="col width-fill">
                            <div class="cell">
                                <select id="country">
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                    <option>USA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col width-1of4">
                            <div class="cell">
                                <label for="male">Gender</label>
                            </div>
                        </div>
                        <div class="col width-fill">
                            <div class="cell">
                                <input name="gender" id="male" type="radio" class="radio">
                                <label for="male">Man</label>
                                <input name="gender" id="female" type="radio" class="radio">
                                <label for="female">Woman</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col width-1of4">
                            <div class="cell">
                                <label for="occupation">Occupation</label>
                            </div>
                        </div>
                        <div class="col width-fill">
                            <div class="cell">
                                <input type="text" id="occupation" placeholder="Your occupation" class="text">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col width-1of4">
                            <div class="cell">
                                <label for="webdev">Hobbies</label>
                            </div>
                        </div>
                        <div class="col width-fill">
                            <div class="cell">
                                <input name="hobbies" id="webdev" type="checkbox" class="checkbox">
                                <label for="webdev">Web development</label>
                                <input name="hobbies" id="design" type="checkbox" class="checkbox">
                                <label for="design">Design</label>
                                <input name="hobbies" id="programming" type="checkbox" class="checkbox">
                                <label for="programming">Programming</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col width-1of4">
                            <div class="cell">
                                <label for="comment">Comment</label>
                            </div>
                        </div>
                        <div class="col width-fill">
                            <div class="cell">
                                <textarea id="comment"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col width-1of4">
                        </div>
                        <div class="col width-fill">
                            <div class="cell">
                                <button class="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            Footer
        </div>
    </div>
</div>
<div class="col">
    <div class="cell panel">
        <div class="header">
            Cool graph
        </div>
        <div class="body">
            <div class="cell">
                <div id="flot-demo"></div>
            </div>
        </div>
        <div class="footer">
            Footer
        </div>
    </div>
</div>
<div class="col leuven">
    <div class="cell panel">
        <div class="body">
            <div class="cell">
                <figure class="nuremberg">
                    <img src="../vendor/assets/img/other/leuven.png" alt="">
                    <figcaption>Leuven</figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
<div class="col leuven">
    <div class="cell panel">
        <div class="body">
            <div class="cell">
                <figure class="nuremberg">
                    <img src="../vendor/assets/img/other/efteling.png" alt="">
                    <figcaption>Efteling</figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


</div>
</div>
</div>
</div>
<div class="site-footer">
    <div class="cell">
        <div id="sociallogos">
            <a href="https://twitter.com/cascadecss"><span class="icon icon-32 icon-twitter"></span></a>
            <a href="http://www.facebook.com/cascadeframework"><span class="icon icon-32 icon-facebook-sign"></span></a>
            <a href="https://github.com/CascadeFramework"><span class="icon icon-32 icon-github"></span></a>

            <div class="col">
                &#169; 2013, <a href="https://twitter.com/johnslegers">John Slegers</a>
            </div>
        </div>
        <a href="index.html" class="powered-by"></a>
    </div>
</div>
</div>

</body>
</html>
