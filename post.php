<?php
if (isset($_GET["pstId"]) & !empty($_GET["pstId"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        $title = "";

        if($_GET["pstId"] == "1"){
            $title = "Introduction of HTML (Hypertext Markup Language)";
        }else if($_GET["pstId"] == "2"){
            $title = "8 Ways To Supercharge Your Alt Text SEO Strategy";
        }else if($_GET["pstId"] == "3"){
            $title = "AJAX (Asynchronous JavaScript And XML)";
        }else if($_GET["pstId"] == "4"){
            $title = "These Are The Best Frameworks For Full-stack Developers In 2023";
        }
        ?>
        <title><?php echo($title); ?> - Tech Crush</title>
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="icon" href="resources/images/icon.png" />
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <?php
                if ($_GET["pstId"] == "1") {
                ?>
                    <!-- Main header -->
                    <section class="col-12 pb-5 header-cover3">
                        <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3 pb-3">
                            <div class="col-12 d-flex flex-row justify-content-between pt-3">
                                <button class="bg-transparent border-0" onclick="window.location='index.php';">
                                    <div class="d-flex flex-row">
                                        <img src="resources/images/icon.png" class="my-auto" style="height: 60px;" />
                                        <h1 class="header-sec1 my-auto ms-3">Tech</h1><span class="fs-1 header-sec2 my-auto">&nbsp;C</span><span class="fs-1 my-auto header-sec3">rush</span>
                                    </div>
                                </button>
                                <div class="my-auto d-flex flex-row">
                                    <nav class="navbar">
                                        <ul class="list-group list-unstyled list-group-horizontal border-0">
                                            <a href="https://twitter.com/DulanjayaBhanu" class="list-group-item fs-5 border-0 bg-transparent text-decoration-none def-link d-none d-md-block d-lg-block">Twitter</a>
                                            <a href="#" class="fs-5 bg-transparent text-decoration-none def-btn def-btn-green my-auto ps-3 pe-3 pt-2 pb-2">Subscribe</a>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12 mt-5 mb-4">
                                <div class="row">
                                    <div class="col-12 mt-3 mb-4 text-center">
                                        <span class="fs-4 nr-text">HTML</span>
                                    </div>
                                    <div class="offset-0 offset-md-1 offset-lg-2 col-12 col-md-10 col-lg-8 pt-2 text-center">
                                        <span class="header-sec3 fs-1">Introduction of HTML (Hypertext Markup Language)</span>
                                    </div>
                                    <div class="col-12 mt-2 mb-5 text-center">
                                        <span class="fs-6 nr-text">Published on July 19, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Main header -->
                    <!-- Contend -->
                    <section>
                        <div class="offset-0 offset-md-1 offset-lg-1 col-12 col-md-10 col-lg-10 ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pb-3 pt-3">
                            <h3 class="header-sec4">HTML (Hypertext Markup Language)</h3>
                            <p class="fs-5 mt-3 pst-text">HTML (Hypertext Markup Language) is a text-based approach to describing how content contained within an HTML file is structured. This markup tells a web browser how to display text, images and other forms of multimedia on a webpage.</p>
                            <p class="fs-5 mt-3 pst-text">HTML is a formal recommendation by the World Wide Web Consortium (W3C) and is generally adhered to by all major web browsers, including both desktop and mobile web browsers. HTML5 is the latest version of the specification.</p>
                            <h4 class="header-sec2">How HTML works</h4>
                            <div class="col-12 pt-3 pb-3">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="resources/images/artical_images/2.jpg" class="def-card img-fluid" style="height: 400px;" />
                                    </div>
                                    <div class="col-12 text-center  mt-3">
                                        <span class="text-muted">Hypertext Markup Language</span>
                                    </div>
                                </div>
                            </div>
                            <p class="fs-5 mt-3 pst-text">HTML is a text file containing specific syntax, file and naming conventions that show the computer and the web server that it is in HTML and should be read as such. By applying these HTML conventions to a text file in virtually any text editor, a user can write and design a basic webpage, and then upload it to the internet.</p>
                            <p class="fs-5 mt-3 pst-text">The most basic of HTML conventions is the inclusion of a document type declaration at the beginning of the text file. This always comes first in the document, because it is the piece that affirmatively informs a computer that this is an HTML file. The document header typically looks like this:
                                <!DOCTYPE html>. It should always be written that way, without any content inside it or breaking it up. Any content that comes before this declaration will not be recognized as HTML by a computer.
                            </p>
                            <p class="fs-5 mt-3 pst-text">Doctypes are not just used for HTML, they can apply to the creation of any document that uses SGML (Standard Generalized Markup Language). SGML is a standard for specifying a specific markup language being used. HTML is one of several markup languages that SGML and doctype declarations apply to.</p>
                            <p class="fs-5 mt-3 pst-text">The other critical requirement for creating an HTML file is saving it with a .Html file extension. Whereas the doctype declaration signals HTML to the computer from the inside of the file, the file extension signals HTML to the computer from the outside of the file. By having both, a computer can tell that it's an HTML file whether it's reading the file or not. This becomes especially important when uploading the files to the web, because the web server needs to know what to do with the files before it can send them to a client computer for the inner contents to be read.</p>
                            <p class="fs-5 mt-3 pst-text">After writing the doctype and saving as an HTML file, a user can implement all the other syntactic tools of HTML to customize a web page. Once finished, they will likely have several HTML files corresponding to various pages of the website. It's important that the user uploads these files in the same hierarchy that they saved them in, as each page references the specific file paths of the other pages, enabling links between them. Uploading them in a different order will cause links to break and pages to be lost, because the specified file paths will not match the pages.</p>
                            <h4 class="header-sec1">Basic elements of HTML</h4>
                            <div class="col-12 pt-3 pb-3">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="resources/images/artical_images/3.jpg" class="def-card img-fluid" style="height: 400px;" />
                                    </div>
                                    <div class="col-12 text-center  mt-3">
                                        <span class="text-muted">Basic elements of HTML</span>
                                    </div>
                                </div>
                            </div>
                            <p class="fs-5 mt-3 pst-text">Using HTML, a text file is further marked up with additional text describing how the document should be displayed. To keep the markup separate from the actual content of the HTML file, there is a special, distinguishing HTML syntax that is used. These special components are known as HTML tags. The tags can contain name-value pairs known as attributes, and a piece of content that is enclosed within a tag is referred to as an HTML element.</p>
                            <p class="fs-5 mt-3 pst-text">HTML elements always have opening tags, content in the middle and closing tags. Attributes can provide additional information about the element and are included in the opening tag. Elements can be described in one of two ways:</p>
                            <ul type="bullet">
                                <li class="fs-5 pst-text">Block-level elements start on a new line in the document and take up their own space. Examples of these elements include headings and paragraph tags.</li>
                                <li class="fs-5 pst-text">Inline elements do not start on a new line in the document and only take up necessary space. These elements usually format the contents of block-level elements. Examples of inline elements include hyperlinks and text format tags.<br />Pros and cons of HTML<br />Pros of using HTML include:</li>
                                <li class="fs-5 pst-text">Is widely adopted with a large amount of resources available.</li>
                                <li class="fs-5 pst-text">Is natively run on every browser.</li>
                                <li class="fs-5 pst-text">Is relatively easy to learn.</li>
                                <li class="fs-5 pst-text">Has a clean and consistent source code.</li>
                                <li class="fs-5 pst-text">Is open source and free to use.</li>
                                <li class="fs-5 pst-text">Can be integrated with other backend programming languages such as PHP.<br />A few cons to consider are:</li>
                                <li class="fs-5 pst-text">Does not have very dynamic functionality and is mainly used for static web pages.</li>
                                <li class="fs-5 pst-text">All components must be created separately even if they use similar elements.</li>
                                <li class="fs-5 pst-text">Browser behavior can be unpredictable. For example, older browsers may not be compatible with newer features.<br />Commonly used HTML tags<br />HTML tags dictate the overall structure of a page and how the elements within them will be displayed in the browser. Commonly used HTML tags include:</li>
                                <li class="fs-5 pst-text">&lt;h1&gt; which describes a top-level heading.</li>
                                <li class="fs-5 pst-text">&lt;h2&gt; which describes a second-level heading.</li>
                                <li class="fs-5 pst-text">&lt;p&gt; which describes a paragraph.</li>
                                <li class="fs-5 pst-text">&lt;table&gt; which describes tabular data.</li>
                                <li class="fs-5 pst-text">&lt;ol&gt; which describes an ordered list of information.</li>
                                <li class="fs-5 pst-text">&lt;ul&gt; which describes an unordered list of information.</li>
                            </ul>
                            <p class="fs-5 mt-3 pst-text">As mentioned, there are opening and closing tags that surround the content they are augmenting. An opening tag looks like this: &lt;p&gt;. A closing tag is the same but contains a backslash in it to indicate that it's the end of the given HTML element. Closing tags look like this: &lt;/p&gt;.</p>
                            <h4 class="header-sec2">How to use and implement HTML</h4>
                            <p class="fs-5 mt-3 pst-text">Because HTML is completely text-based, an HTML file can be edited simply by opening it up in a program such as Notepad++, Vi or Emacs. Any text editor can be used to create or edit an HTML file and, so long as it is named with an .Html file extension, any web browser -- such as Chrome or Firefox -- will be capable of displaying the file as a webpage.</p>
                            <p class="fs-5 mt-3 pst-text">For professional software developers, there are a variety of WYSIWYG editors to develop webpages. NetBeans, IntelliJ, Eclipse and Microsoft's Visual Studio provide WYSIWYG editors as either plugins or as standard components, making it incredibly easy to use and implement HTML.</p>
                            <p class="fs-5 mt-3 pst-text">These WYSIWYG editors also provide HTML troubleshooting facilities, although modern web browsers often contain web developer plugins that will highlight problems with HTML pages, such as a missing closing tag or syntax that does not create well-formed HTML.</p>
                            <p class="fs-5 mt-3 pst-text">Chrome and Firefox both include HTML developer tools that allow for the immediate viewing of a webpage's complete HTML file, along with the ability to edit HTML on the fly and immediately incorporate changes within the internet browser.</p>
                            <h4 class="header-sec1">HTML, CSS and JavaScript</h4>
                            <div class="col-12 pt-3 pb-3">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="resources/images/artical_images/1.jpg" class="def-card img-fluid" style="height: 400px;" />
                                    </div>
                                    <div class="col-12 text-center  mt-3">
                                        <span class="text-muted">HTML,CSS and JavaScript</span>
                                    </div>
                                </div>
                            </div>
                            <p class="fs-5 mt-3 pst-text">HTML is used to create webpages but does experience limitations when it comes to fully responsive components. Therefore, HTML should only be used to add text elements and structure them within a page. For more complex features, HTML can be combined with cascading style sheets (CSS) and JavaScript (JS).</p>
                            <p class="fs-5 mt-3 pst-text">An HTML file can link to a cascading style sheet or JS file -- usually at the top of the document with a specified file path -- which will contain information about which colors to use, which fonts to use and other HTML element rendering information. JavaScript also allows developers to include more dynamic functionality, such as pop-ups and photo sliders, in a webpage. Tags called class attributes are used to match HTML elements to their corresponding CSS or JS elements.</p>
                            <p class="fs-5 mt-3 pst-text">For example, if a user wants the color of a certain amount of text to be red, they can write code in the CSS file with an accompanying class attribute that turns text red. Then they can place the associated class attribute on all the pieces of text they want to be red in the HTML sheet. The same basic method applies to JS sheets, with different functions. </p>
                            <p class="fs-5 mt-3 pst-text">Separating information about how a page is structured, the role of HTML, from the information about how a webpage looks when it is rendered in a browser is a software development pattern and best practice known as separation of concerns.</p>
                            <h4 class="header-sec1">History and development</h4>
                            <p class="fs-5 mt-3 pst-text">In the early days of the world wide web, marking up text-based documents using HTML syntax was more than sufficient to facilitate the sharing of academic documents and technical memos. However, as the internet expanded beyond the walls of academia and into the homes of the general population, greater demand was placed on webpages in terms of formatting and interactivity.</p>
                            <p class="fs-5 mt-3 pst-text">HTML 4.01 was released in 1999, at a time when the internet was not yet a household name, and HTML5 was not standardized until 2014. During this time, HTML markup drifted from the job of simply describing the document structure of webpage content into the role of also describing how content should look when a webpage displays it.</p>
                            <p class="fs-5 mt-3 pst-text">As a result, HTML4-based webpages often included information within a tag about what font to use when displaying text, what color should be used for the background and how content should be aligned. Describing within an HTML tag how an HTML element should be formatted when rendered on a webpage is considered an HTML antipattern. HTML should generally describe how content is structured, not how it will be styled and rendered within a browser. Other markup languages are better suited to this task.</p>
                            <p class="fs-5 mt-3 pst-text">One major difference between HTML4 and HTML5 is that the separation of concerns pattern is more rigorously enforced in HTML5 than it was in HTML4. With HTML5, the bold &lt;b&gt; and italicize &lt;i&gt; tags have been deprecated. For the paragraph tag, the align attribute has been completely removed from the HTML specification.</p>
                            <h4 class="header-sec2">HTML versions</h4>
                            <p class="fs-5 mt-3 pst-text">The following is a list of HTML versions and the years they were created. Several iterations of each version have been released over time. This list aims to focus on significant iterations.</p>
                            <ul type="bullet">
                                <li class="fs-5 pst-text">HTML 1.0 -- released in 1992 -- had very limited capability and around 20 elements.</li>
                                <li class="fs-5 pst-text">HTML 2.0 -- released in 1995 -- began to incorporate elements relating to math functions.</li>
                                <li class="fs-5 pst-text">HTML 3.2 -- released in 1996 -- dropped the math function initiative altogether, and fixed overlap between various proprietary extensions.</li>
                                <li class="fs-5 pst-text">HTML 4.0 -- released in 1997 -- offered three variations which differed in the number of deprecated elements that were allowed.</li>
                                <li class="fs-5 pst-text">HTML 4.01 -- released in 1999 -- largely the same as 4.0.</li>
                                <li class="fs-5 pst-text">HTML 5 -- released in 2014 -- came after a long break in updates because the organization that developed it -- W3C -- was focusing on another, parallel language called XHTML.</li>
                                <li class="fs-5 pst-text">HTML 5.1 -- released in 2016 -- aimed to more easily accommodate various types of media embedding with new tags.</li>
                                <li class="fs-5 pst-text">HTML 5.2 -- released in 2017 -- aimed to be equally understandable by humans and computers.</li>
                                <li class="fs-5 pst-text">HTML 5.3 -- yet to be released -- W3C is collaborating with WHATWG on a new version. The collaboration began in 2019.</li>
                            </ul>
                            <h4 class="header-sec1">Features of HTML5</h4>
                            <p class="fs-5 mt-3 pst-text">HTML5 introduces several elements to increase interactivity, multimedia capabilities and semantic efficiency. Instead of using plugins, multimedia can be placed within the HTML code. These elements include:</p>
                            <ul type="bullet">
                                <li class="fs-5 pst-text">Graphics elements:</li>
                                <li class="fs-5 pst-text">&lt;canvas&gt;, which creates a blank rectangular space in which web designers can draw using JavaScript.</li>
                                <li class="fs-5 pst-text">&lt;svg&gt;, which is a container for scalable vector graphics (SVG).</li>
                                <li class="fs-5 pst-text">Semantic elements:</li>
                                <li class="fs-5 pst-text">&lt;header&gt;, which creates a header at the top of the page.</li>
                                <li class="fs-5 pst-text">&lt;footer&gt;, which creates a footer at the bottom of the page.</li>
                                <li class="fs-5 pst-text">&lt;article&gt;, which creates an area for independent content.</li>
                                <li class="fs-5 pst-text">&lt;section&gt;, which defines sections and subsections such as chapters, or headers and footers when more than one are necessary.</li>
                                <li class="fs-5 pst-text">&lt;nav&gt;, which creates a navigation menu.</li>
                                <li class="fs-5 pst-text">Multimedia elements:</li>
                                <li class="fs-5 pst-text">&lt;audio&gt;, which describes MP3 files, WAV files and OGG files in HTML.</li>
                                <li class="fs-5 pst-text">&lt;video&gt;, which describes MP4, WebM and OGG video types.</li>
                                <li class="fs-5 pst-text">Attributes that apply to the &lt;form&gt; element, which creates an area for user input on the web page. These include number, date, calendar and range.<br />Other main features of HTML5 include:</li>
                                <li class="fs-5 pst-text">Elimination of outmoded or redundant attributes.</li>
                                <li class="fs-5 pst-text">Offline editing.</li>
                                <li class="fs-5 pst-text">The ability to drag and drop between HTML5 documents.</li>
                                <li class="fs-5 pst-text">Messaging enhancements.</li>
                                <li class="fs-5 pst-text">Detailed parsing</li>
                                <li class="fs-5 pst-text">MIME and protocol handler registration.</li>
                                <li class="fs-5 pst-text">A common standard for storing data in SQL databases (Web SQL).</li>
                                <li class="fs-5 pst-text">Application program interfaces (API) for complex applications.</li>
                                <li class="fs-5 pst-text">Accommodations for mobile device app development.</li>
                                <li class="fs-5 pst-text">MathML for mathematical and scientific formulas.</li>
                            </ul>
                            <p class="fs-5 mt-3 pst-text">While the addition of these features represents an effort to support multimedia embedding, changes to the HTML specification demonstrate the desire of the community for HTML to return to its original purpose of describing the structure of content. Basically, more structural features have been added, while several format-centric features have been deprecated. For the purpose of backward-compatibility, web browsers will continue to support deprecated HTML tags, but eventually HTML will be mainly structure-based.</p>
                            <h4 class="header-sec2">HTML syntax standards</h4>
                            <p class="fs-5 mt-3 pst-text">In the following HTML example, there are two HTML elements. Both elements use the same paragraph tag, designated with the letter p, and both use the directional attribute dir, although a different attribute value is assigned to the HTML attribute's name-value pairing, namely rtl and ltr.</p>
                            <p class="fs-5 mt-3 pst-text">Notice that when this HTML snippet is rendered in a browser, the HTML tags impact how each HTML element is displayed on the page, but none of the HTML tags or attributes are displayed. HTML simply describes how to render the content. The HTML itself is never displayed to the end user.</p>
                            <p class="fs-5 mt-3 pst-text">In order for a web browser to display an HTML page without error, it must be provided with well-formed HTML. To be well-formed, each HTML element must be contained within an opening tag -- &lt;p&gt; -- and a closing tag -- &lt;/p&gt;. Furthermore, any new tag opened within another tag must be closed before the containing tag is closed. So, for example, &lt;h1&gt;&lt;p&gt;well-formed HTML&lt;/p&gt;&lt;/h1&gt; is well-formed HTML, while &lt;h1&gt;&lt;p&gt;well-formed HTML&lt;/h1&gt;&lt;/p&gt; is not well-formed HTML.</p>
                            <p class="fs-5 mt-3 pst-text">Another syntax rule is that HTML attributes should be enclosed within single or double quotes. There is often debate about which format is technically correct, but the World Wide Web Consortium asserts that both approaches are acceptable.</p>
                            <p class="fs-5 mt-3 pst-text">The best advice for choosing between single and double quotes is to keep the usage consistent across all the documents. HTML style-checkers can be used to enforce consistent use across pages. It should be noted that sometimes using a single quote is required, such as in an instance where an attribute value actually contains a double quote character. The reverse is true as well.</p>
                            <p class="fs-5 mt-3 pst-text">It's important to note as well that the language HTML works with is basic English. Non-English characters -- or letters -- such as Chinese, or special symbols -- like letters with accent marks -- may not display correctly on a webpage by default. In order to accommodate special character sets, users need to specify the character encoding with an element that looks like this: &lt;meta charset="utf-8"/&gt;. In this case, utf-8 is the character set. Utf-8 is HTML's default English charset.</p>
                        </div>
                    </section>
                    <!-- Contend -->
                <?php
                } else if ($_GET["pstId"] == "2") {
                ?>
                    <!-- Main header -->
                    <section class="col-12 pb-5 header-cover3">
                        <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3 pb-3">
                            <div class="col-12 d-flex flex-row justify-content-between pt-3">
                                <button class="bg-transparent border-0" onclick="window.location='index.php';">
                                    <div class="d-flex flex-row">
                                        <img src="resources/images/icon.png" class="my-auto" style="height: 60px;" />
                                        <h1 class="header-sec1 my-auto ms-3">Tech</h1><span class="fs-1 header-sec2 my-auto">&nbsp;C</span><span class="fs-1 my-auto header-sec3">rush</span>
                                    </div>
                                </button>
                                <div class="my-auto d-flex flex-row">
                                    <nav class="navbar">
                                        <ul class="list-group list-unstyled list-group-horizontal border-0">
                                            <a href="https://twitter.com/DulanjayaBhanu" class="list-group-item fs-5 border-0 bg-transparent text-decoration-none def-link d-none d-md-block d-lg-block">Twitter</a>
                                            <a href="#" class="fs-5 bg-transparent text-decoration-none def-btn def-btn-green my-auto ps-3 pe-3 pt-2 pb-2">Subscribe</a>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12 mt-5 mb-4">
                                <div class="row">
                                    <div class="col-12 mt-3 mb-4 text-center">
                                        <span class="fs-4 nr-text">SEO</span>
                                    </div>
                                    <div class="offset-0 offset-md-1 offset-lg-2 col-12 col-md-10 col-lg-8 pt-2 text-center">
                                        <span class="header-sec3 fs-1">8 Ways To Supercharge Your Alt Text SEO Strategy</span>
                                    </div>
                                    <div class="col-12 mt-2 mb-5 text-center">
                                        <span class="fs-6 nr-text">Published on July 19, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Main header -->
                    <!-- Contend -->
                    <section>
                        <div class="offset-0 offset-md-1 offset-lg-1 col-12 col-md-10 col-lg-10 ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pb-3 pt-3">
                            <div class="col-12 pt-3 pb-3">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="resources/images/artical_images/4.jpg" class="def-card img-fluid" style="height: 400px;" />
                                    </div>
                                    <div class="col-12 text-center  mt-3">
                                        <span class="text-muted">Search Engine Optmization</span>
                                    </div>
                                </div>
                            </div>
                            <p class="fs-5 mt-3 pst-text">Alt text. You know it&apos;s important for SEO.</p>
                            <p class="fs-5 mt-3 pst-text">In fact, Google has stated that alt text is a ranking factor.</p>
                            <p class="fs-5 mt-3 pst-text">And with the increasing rise of visual search, describing your images for web crawlers has taken on even more importance.</p>
                            <p class="fs-5 mt-3 pst-text">But beyond a short sentence describing the image, how do you make your alt text even better?</p>
                            <p class="fs-5 mt-3 pst-text">Truth is, alt text is like any other part of SEO - it benefits from strategy.</p>
                            <p class="fs-5 mt-3 pst-text">This should be a strategy that not only makes your alt text more effective but also makes creating alt text easier and more automated so you have more time to focus on higher-level areas.</p>
                            <p class="fs-5 mt-3 pst-text">The more aligned you are in your keywords - in content, backlinks, and technical on-page components like alt text - the stronger your ranking potential.</p>
                            <p class="fs-5 mt-3 pst-text">You can enter your keywords manually, or a service like AltText.Ai can integrate your keywords into AI-generated alt text.</p>
                            <p class="fs-5 mt-3 pst-text"><b class="fs-5 pst-text">What Is Alt Text?</b><br />First, let&apos;s start with the basics.</p>
                            <p class="fs-5 mt-3 pst-text">Alt text is HTML code that describes what&apos;s in an image. Screen readers use alt text to help those with vision impairments.</p>
                            <p class="fs-5 mt-3 pst-text">In addition, search engines use alt text to understand what&apos;s on the page and how to index it.</p>
                            <p class="fs-5 mt-3 pst-text">Missing alt text is bad.</p>
                            <p class="fs-5 mt-3 pst-text">Any relevant alt text is better.</p>
                            <p class="fs-5 mt-3 pst-text">And SEO-optimized alt text is the best.</p>
                            <p class="fs-5 mt-3 pst-text">But how do we get there - without spending hours upon hours manually typing it?</p>
                            <p class="fs-5 mt-3 pst-text">Here&apos;s how:</p>
                            <ol type="1">
                                <li class="fs-5 pst-text"><b class="fs-5 pst-text">Methodically Prioritize, Update & Add Alt Text To Key Images</b><br />We know a lot of people who are in this boat: you have hundreds or even thousands of images without alt text.
                                    <p class="fs-5 mt-3 pst-text">You know you need it, but it&apos;s such. A. Chore. Who has time for that?</p>
                                    <p class="fs-5 mt-3 pst-text">No one, that&apos;s who.</p>
                                    <p class="fs-5 mt-3 pst-text">Add Alt Text To Your Most-Visited Pages<br />Go to your most-visited pages and manually enter alt text for those images.</p>
                                    <p class="fs-5 mt-3 pst-text">You can work through your top 5, 10, 20 pages as you have time.</p>
                                    <p class="fs-5 mt-3 pst-text">Use AI To Bulk-Update Alt Text<br />If you have many images, you might want to consider automating your alt text with AI.</p>
                                    <p class="fs-5 mt-3 pst-text">A powerful tool like AltText.Ai can bulk-update entire libraries of images in a fraction of the time a copywriter would need.</p>
                                    <p class="fs-5 mt-3 pst-text">Best Results: Use This Hybrid AI & Manual Alt Text Approach<br />Then, there&apos;s a hybrid approach — bulk update your alt text using AI, then go into your most popular posts and manually refine those.</p>
                                    <p class="fs-5 mt-3 pst-text">AltText.Ai has an optional human review feature if you&apos;re short on time, but need the highest level of accuracy and confidence.</p>
                                    <p class="fs-5 mt-3 pst-text">Furthermore, some images, like infographics, require extra time and effort to unpack.</p>
                                    <p class="fs-5 mt-3 pst-text">By offloading simpler images to AI, you can devote time to the images that actually need that human touch.</p>
                                </li>
                                <li class="fs-5 pst-text"><b class="fs-5 pst-text">Make Adding Alt Text A Routine</b><br />When it comes to uploading new images, you simply have to make alt text a part of your regular workflow.
                                    <p class="fs-5 mt-3 pst-text">There are two simple ways to do this:</p>
                                    <ul type="bullet">
                                        <li class="fs-5 pst-text">Implement an alt text checklist before a post goes live.</li>
                                        <li class="fs-5 pst-text">Use an app or plugin that automatically generates alt text as images are added or updated.<br />Most CMS systems have a field for alt text, though some make it easier than others.</li>
                                    </ul>
                                    <p class="fs-5 mt-3 pst-text">WordPress allows you to enter alt text from your media library or as you build your post.</p>
                                    <p class="fs-5 mt-3 pst-text">Other sites, like Shopify, require you to go out of your way and click on your product photo.</p>
                                    <p class="fs-5 mt-3 pst-text">Though many companies are working to improve their accessibility features (including making alt text entry more intuitive), you may need to familiarize yourself with your particular CMS.</p>
                                    <p class="fs-5 mt-3 pst-text">AltText.Ai simplifies this workflow by automatically generating alt text for you - all behind the scenes. It runs in the background and requires no extra steps from you.</p>
                                    <p class="fs-5 mt-3 pst-text">AltText.Ai integrations are currently available for WordPress, Shopify, Contentful, and Hygraph, in addition to a web interface and Developer API.</p>
                                    <p class="fs-5 mt-3 pst-text"></p>
                                </li>
                                <li class="fs-5 pst-text"><b class="fs-5 pst-text">Use Alt Text To Provide Context & Keywords For Your Images</b><br />It&apos;s not enough to just describe what&apos;s in your image.
                                    <p class="fs-5 mt-3 pst-text">As important as alt text is, entering “cat” for a picture of your pet will never help you rank for [cat].</p>
                                    <p class="fs-5 mt-3 pst-text">Instead, give your image context that informs Google of what you offer with as much specificity as possible.</p>
                                    <p class="fs-5 mt-3 pst-text">Consider a photo of a hot air balloon.</p>
                                    <p class="fs-5 mt-3 pst-text">“Hot air balloon” is generic alt text that doesn&apos;t really tell Google what your site is about or your value to users.</p>
                                    <p class="fs-5 mt-3 pst-text">However, if you label your alt text “a hot air balloon over Napa Valley” or “hot air balloon and extra supplies for sale”, then along with additional info from your page, you reinforce to Google what you offer and to whom you should be shown.</p>
                                    <p class="fs-5 mt-3 pst-text">This is also where keywords should come into play. You&apos;ve probably spent a lot of time doing keyword research. Well, get the most out of it!</p>
                                    <p class="fs-5 mt-3 pst-text">Definitely bake your keywords into your alt text.</p>
                                </li>
                                <li class="fs-5 pst-text"> <b class="fs-5 pst-text">Avoid Keyword Stuffing Your Alt Text</b><br />Yes, you should include keywords, but do so judiciously.
                                    <p class="fs-5 mt-3 pst-text">Keyword stuffing not only creates a bad user experience but may also come off as spammy to search engines.</p>
                                    <p class="fs-5 mt-3 pst-text">Alt text should be:</p>
                                    <ul type="bullet">
                                        <li class="fs-5 pst-text">Grammatically accurate.</li>
                                        <li class="fs-5 pst-text">A readable sentence or phrase that avoids excessive redundancies or descriptors that are unrelated to the image itself.</li>
                                    </ul>
                                    <p class="fs-5 mt-3 pst-text">This is where your inner poet may need to come in because you want to weave your keywords in a natural, flowing way.</p>
                                    <p class="fs-5 mt-3 pst-text">Oftentimes it&apos;s better to just pick one or two keywords, rather than force them all in.</p>
                                    <p class="fs-5 mt-3 pst-text">Remember, alt text is just one factor when it comes to search ranking. The most important thing is creating a high-quality, reputable page, and that means writing coherent and accurate alt text.</p>
                                    <p class="fs-5 mt-3 pst-text">If you go the automated alt text route, AltText.Ai will always balance keywords with the need to have real and non-spammy descriptive alt text. With the help of AI language models, AltText.Ai creates natural-sounding sentences by selecting the most relevant SEO keywords.</p>
                                </li>
                                <li class="fs-5 pst-text"> <b class="fs-5 pst-text">Avoid Using Basic Alt Text Formulas</b><br />It can be tempting to use a standardized format and call it a day.
                                    <p class="fs-5 mt-3 pst-text">Say you have an ecommerce store and have the alt text template: “Product Brand” + “Product Name”.</p>
                                    <p class="fs-5 mt-3 pst-text">This is certainly better than nothing, but is also very generic and doesn&apos;t capture all the attributes that people might search for.</p>
                                    <p class="fs-5 mt-3 pst-text">How To Structure Your Alt Text<br />Combine distinctive, important details with the basic product data.</p>
                                    <p class="fs-5 mt-3 pst-text">If you sell a popular item, these extra details can give you an edge over your competitors.</p>
                                    <p class="fs-5 mt-3 pst-text">Some common search terms you might want to mention include:</p>
                                    <ul type="bullet">
                                        <li class="fs-5 pst-text">Color.</li>
                                        <li class="fs-5 pst-text">Special functions and designs.</li>
                                        <li class="fs-5 pst-text">Materials used.</li>
                                    </ul>
                                    <p class="fs-5 mt-3 pst-text">And here AI also has a benefit. If these features are visible in your product photo, AI computer vision can automatically detect and combine them with your product data.</p>
                                    <p class="fs-5 mt-3 pst-text">This is a huge timesaver if you have a giant product catalog with too-basic alt text that doesn&apos;t speak to the customer and what they might search for.</p>
                                </li>
                                <li class="fs-5 pst-text"> <b class="fs-5 pst-text">Don&apos;t Let Perfect Be The Enemy Of Good</b><br />Seriously.
                                    <p class="fs-5 mt-3 pst-text">Yes, alt text is valuable SEO real estate. Do you wish you could optimize profits on that real estate? Of course. But if you currently don&apos;t have the bandwidth, try just getting something down.</p>
                                    <p class="fs-5 mt-3 pst-text">According to John Mueller of Google&apos;s “Search Off the Record” podcast, “If you&apos;re just adding alt text for the first time, then sometimes, even any alt text is better than nothing.”</p>
                                    <p class="fs-5 mt-3 pst-text">Why? From an accessibility standpoint, screen readers that encounter images without alt text may recite unhelpful (not to mention annoying) information, like the image&apos;s alphanumeric filename. That makes for a terrible experience.</p>
                                    <p class="fs-5 mt-3 pst-text">And from a SEO point of view, Google takes accessibility seriously and any oversight like lack of alt text may be counted as a ding against your site.</p>
                                    <p class="fs-5 mt-3 pst-text">You or someone on your team can dedicate a couple of hours to updating alt text. But if this is a days-long project or prohibitively expensive, an AI alt text generator might be the best way to go.</p>
                                </li>
                                <li class="fs-5 pst-text"> <b class="fs-5 pst-text">Transcribe Words Into Your Alt Text</b>
                                    <p class="fs-5 mt-3 pst-text">Myth: You may have heard not to include important text in your images because Google can&apos;t read it and therefore those keywords are wasted and can&apos;t strengthen your ranking.</p>
                                    <p class="fs-5 mt-3 pst-text">Fact: There are times when including text in your images is necessary. Perhaps the text is important to the design, or you have tons of images that already have text and you don&apos;t want to redesign them.</p>
                                    <p class="fs-5 mt-3 pst-text">This is where alt text comes in because Google treats alt text as text on the page. Transcribe the copy in your image into your alt text.</p>
                                    <p class="fs-5 mt-3 pst-text">And voila!</p>
                                    <p class="fs-5 mt-3 pst-text">Google can now read the text and can use it to understand and rank your page.</p>
                                </li>
                                <li class="fs-5 pst-text"> <b class="fs-5 pst-text">Evolve & Adapt</b><br />So now you have your alt text - great!
                                    <p class="fs-5 mt-3 pst-text">But as an SEO, you know that strategy is never over. You must evaluate, evolve, and adapt.</p>
                                    <p class="fs-5 mt-3 pst-text">When your content or keywords change, so should your alt text. Make sure your alt text aligns with your current SEO strategy.</p>
                                    <p class="fs-5 mt-3 pst-text">When updating, you can take the same approach as our first tip - methodically update and add. Choose the pages that offer the most SEO bang for your time and effort buck.</p>
                                    <p class="fs-5 mt-3 pst-text">Or you can have an AI alt text generator execute your strategy for you. AltText.Ai can bulk update image alt text via CSV or bulk action. Just tell it your new keywords and it can incorporate them in a natural, readable sentence - all in one fell swoop.</p>
                                    <p class="fs-5 mt-3 pst-text">Now Go Forth & Alt Text!</p>
                                    <p class="fs-5 mt-3 pst-text">As you know, every little bit counts in the SEO arena. That includes alt text - an often-overlooked but important component in optimizing your website and getting that ever-important edge.</p>
                                    <p class="fs-5 mt-3 pst-text">With these tips and tools, you can generate alt text that gets results - all while saving you time.</p>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <!-- Contend -->
                <?php
                } else if ($_GET["pstId"] == "3") {
                ?>
                    <!-- Main header -->
                    <section class="col-12 pb-5 header-cover3">
                        <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3 pb-3">
                            <div class="col-12 d-flex flex-row justify-content-between pt-3">
                                <button class="bg-transparent border-0" onclick="window.location='index.php';">
                                    <div class="d-flex flex-row">
                                        <img src="resources/images/icon.png" class="my-auto" style="height: 60px;" />
                                        <h1 class="header-sec1 my-auto ms-3">Tech</h1><span class="fs-1 header-sec2 my-auto">&nbsp;C</span><span class="fs-1 my-auto header-sec3">rush</span>
                                    </div>
                                </button>
                                <div class="my-auto d-flex flex-row">
                                    <nav class="navbar">
                                        <ul class="list-group list-unstyled list-group-horizontal border-0">
                                            <a href="https://twitter.com/DulanjayaBhanu" class="list-group-item fs-5 border-0 bg-transparent text-decoration-none def-link d-none d-md-block d-lg-block">Twitter</a>
                                            <a href="#" class="fs-5 bg-transparent text-decoration-none def-btn def-btn-green my-auto ps-3 pe-3 pt-2 pb-2">Subscribe</a>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12 mt-5 mb-4">
                                <div class="row">
                                    <div class="col-12 mt-3 mb-4 text-center">
                                        <span class="fs-4 nr-text">AJAX</span>
                                    </div>
                                    <div class="offset-0 offset-md-1 offset-lg-2 col-12 col-md-10 col-lg-8 pt-2 text-center">
                                        <span class="header-sec3 fs-1">AJAX (Asynchronous JavaScript And XML)</span>
                                    </div>
                                    <div class="col-12 mt-2 mb-5 text-center">
                                        <span class="fs-6 nr-text">Published on July 20, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Main header -->
                    <!-- Contend -->
                    <section>
                        <div class="offset-0 offset-md-1 offset-lg-1 col-12 col-md-10 col-lg-10 ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pb-3 pt-3">
                            <div class="col-12 pt-3 pb-3">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="resources/images/artical_images/5.jpg" class="def-card img-fluid" style="height: 400px;" />
                                    </div>
                                    <div class="col-12 text-center  mt-3">
                                        <span class="text-muted">Asynchronous JavaScript and XML</span>
                                    </div>
                                </div>
                            </div>
                            <h4 class="header-sec2">What is AJAX (Asynchronous JavaScript and XML)?</h4>
                            <p class="fs-5 mt-3 pst-text">AJAX (Asynchronous JavaScript and XML) is a technique aimed at creating better and faster interactive web apps by combining several programming tools, including JavaScript, dynamic HTML (DHTML) and Extensible Markup Language (XML).</p>
                            <p class="fs-5 mt-3 pst-text">Based on open standards, AJAX uses a browser built-in XMLHttpRequest object, JavaScript and HTML Document Object Model (DOM) to exchange data between a web browser and web server, and to display this data.</p>
                            <p class="fs-5 mt-3 pst-text">AJAX supports data exchange with a web server behind the scenes and allows webpages to update asynchronously. This makes it possible to update parts of a particular webpage and display the results to a user quickly, without having to wait to reload the entire page.</p>
                            <h4 class="header-sec1">Understanding Asynchronous JavaScript and XML</h4>
                            <p class="fs-5 mt-3 pst-text">AJAX is not a proprietary technology, programming language or a packaged product. Rather, it is a web browser technology and open standard that's independent of web server software. It can send and receive information from web servers in various formats, including the following:</p>
                            <ul type="bullet">
                                <li class="fs-5 pst-text">JavaScript Objection Notation (JSON)</li>
                                <li class="fs-5 pst-text">XML</li>
                                <li class="fs-5 pst-text">HTML</li>
                                <li class="fs-5 pst-text">text files</li>
                            </ul>
                            <p class="fs-5 mt-3 pst-text">The AJAX method uses a combination of technologies that allow the content on webpages to update immediately based on a user's action, which may be a click on a page or even a simple mouse movement. Just one or a few parts of the page may be refreshed, instead of reloading or refreshing the entire page. This differentiates AJAX from an HTTP request, during which users must wait for a whole new page to load. AJAX can also access data from external sources even after a webpage has loaded completely.</p>
                            <p class="fs-5 mt-3 pst-text">AJAX uses JavaScript for dynamic content display, XHTML for content and XML to receive server data. In addition, it combines many other programming tools, such as the following:</p>
                            <ul type="bullet">
                                <li class="fs-5 pst-text">cascading style sheets for presentation;</li>
                                <li class="fs-5 pst-text">DOM for dynamic content display; and</li>
                                <li class="fs-5 pst-text">Microsoft object, XMLHttpRequest to fetch data in the web browser.</li>
                            </ul>
                            <p class="fs-5 mt-3 pst-text">XMLHttpRequest is an API that can be used by JavaScript and other web browser scripting languages to move and manipulate web browser data to and from a web server using HTTP. Since AJAX relies on XMLHttpRequest, early applications worked only with Microsoft's Internet Explorer browser. Today, almost all browsers support AJAX.</p>
                            <h4 class="header-sec2">The 'Asynchronous' in AJAX</h4>
                            <p class="fs-5 mt-3 pst-text">AJAX executes within the JavaScript framework. Here's how the various AJAX processes work asynchronously:</p>
                            <ul type="bullet">
                                <li class="fs-5 pst-text">Once the HTML page loads, data is read from a web server.</li>
                                <li class="fs-5 pst-text">Without the need to reload the webpage, the data can be updated.</li>
                                <li class="fs-5 pst-text">Data transfer happens to the web server in the background.</li>
                            </ul>
                            <p class="fs-5 mt-3 pst-text">All these asynchronous steps help create responsive HTML web content, as well as faster performance. As they achieve these goals, they help maintain a natural user interaction with webpages. Further, since AJAX is not dependent on web servers, it creates a data-driven environment rather than a page-driven environment. That's why it can execute tasks asynchronously and at any time.</p>
                            <h4 class="header-sec1">How Asynchronous JavaScript and XML works</h4>
                            <div class="col-12 pt-3 pb-3">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="resources/images/artical_images/6.svg" class="def-card img-fluid" style="height: 400px;" />
                                    </div>
                                    <div class="col-12 text-center  mt-3">
                                        <span class="text-muted">Workings of AJAX</span>
                                    </div>
                                </div>
                            </div>
                            <p class="fs-5 mt-3 pst-text">To understand the workings of AJAX, it's important to remember that it has two key components: the web browser and the web server.</p>
                            <p class="fs-5 mt-3 pst-text">Also, conventional web applications transmit information to and from the web server using synchronous requests, which directs the user to a new page with new information from the server. But with AJAX, once a user hits the submit button (or performs some other action), JavaScript makes a request to the server, interprets the results and asynchronously updates the browser's screen.</p>
                            <p class="fs-5 mt-3 pst-text">Here's how the process works:</p>
                            <ul type="bullet">
                                <li class="fs-5 pst-text">Some event happens on a webpage. For instance, the page loads, or a user clicks on a particular button.</li>
                                <li class="fs-5 pst-text">JavaScript creates an XMLHttpRequest object.</li>
                                <li class="fs-5 pst-text">This object sends a request to the corresponding web server.</li>
                                <li class="fs-5 pst-text">The server processes the request and sends a response back to the browser.</li>
                                <li class="fs-5 pst-text">JavaScript reads the response.</li>
                                <li class="fs-5 pst-text">JavaScript performs the proper action, depending on the triggering event.</li>
                            </ul>
                            <p class="fs-5 mt-3 pst-text">AJAX in a nutshell, Asynchronous JavaScript and XML AJAX technologies, components, data formats, steps and applications. AJAX applications and AJAX engine
                                AJAX applications don't require the installation of a plugin but work directly with a web browser. These applications usually use XML to transport data. However, they may also transport data as plaintext or JSON text (see the Understanding AJAX section).</p>
                            <p class="fs-5 mt-3 pst-text">AJAX applications use an engine that acts as an intermediary between a user's browser and the server from which it is requesting information. Thus, instead of loading a traditional webpage, the browser loads the engine, which then displays the page to the user. The engine continues to run in the background, using JavaScript to communicate with the browser.</p>
                            <p class="fs-5 mt-3 pst-text">Any input from the user, such as clicking anywhere on the page, sends a JavaScript call to the engine, which responds instantly in most cases. If the engine requires additional data, it requests it from the server, usually using XML, while simultaneously updating the page.</p>
                            <h4 class="header-sec2">Benefits of Asynchronous JavaScript and XML</h4>
                            <p class="fs-5 mt-3 pst-text">Some key advantages of AJAX are as follows:</p>
                            <ul type="bullet">
                                <li class="fs-5 pst-text">AJAX is based on widely accepted open standards.</li>
                                <li class="fs-5 pst-text">It enhances the interactivity of webpages.</li>
                                <li class="fs-5 pst-text">It is highly efficient and fast for responsive web applications in e-commerce and other online platforms.</li>
                                <li class="fs-5 pst-text">It is a viable Rich Internet Application technology and is fairly synonymous with Web 2.0.</li>
                                <li class="fs-5 pst-text">AJAX supports intuitive user interactions.</li>
                                <li class="fs-5 pst-text">It allows content to be updated based on a specific user action, a time interval or some application-specific logic.</li>
                                <li class="fs-5 pst-text">Many open source toolkits and libraries are available to provide cross-browser support for AJAX-based interactions.</li>
                            </ul>
                            <h4 class="header-sec1">AJAX benefits and drawbacks, Asynchronous JavaScript and XML Advantages and disadvantages of AJAX. Disadvantages of AJAX</h4>
                            <p class="fs-5 mt-3 pst-text">One drawback of AJAX-based applications is that they require increased communication between web browsers and web servers. This may result in application degradation due to the following:</p>
                            <ul type="bullet">
                                <li class="fs-5 pst-text">too many web server connections;</li>
                                <li class="fs-5 pst-text">too many packets traversing the network; and</li>
                                <li class="fs-5 pst-text">connection limitations implemented by browsers.</li>
                            </ul>
                            <p class="fs-5 mt-3 pst-text">In addition, some browsers may not be compatible with AJAX -- although this is rare. Finally, AJAX requires JavaScript, which can be difficult to debug and maintain.</p>
                            <h4 class="header-sec2">Applications of AJAX</h4>
                            <p class="fs-5 mt-3 pst-text">Google Maps is one well-known application of AJAX. The interface allows users to change views and manipulate the map in real time.</p>
                            <p class="fs-5 mt-3 pst-text">AJAX can also be used to create the following:</p>
                            <ul type="bullet">
                                <li class="fs-5 pst-text">RSS readers</li>
                                <li class="fs-5 pst-text">desktop tutorials</li>
                                <li class="fs-5 pst-text">web-based chat applications</li>
                                <li class="fs-5 pst-text">calendar applications</li>
                                <li class="fs-5 pst-text">rating widgets</li>
                                <li class="fs-5 pst-text">contact and login forms</li>
                                <li class="fs-5 pst-text">charting components</li>
                            </ul>
                            <p class="fs-5 mt-3 pst-text">See why collaboration is key to a secure web application architecture and how to apply web application reconnaissance fundamentals to improve offensive and defensive hacking skills.</p>
                        </div>
                    </section>
                    <!-- Contend -->
                <?php
                } else if ($_GET["pstId"] == "4") {
                ?>
                    <!-- Main header -->
                    <section class="col-12 pb-5 header-cover3">
                        <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3 pb-3">
                            <div class="col-12 d-flex flex-row justify-content-between pt-3">
                                <button class="bg-transparent border-0" onclick="window.location='index.php';">
                                    <div class="d-flex flex-row">
                                        <img src="resources/images/icon.png" class="my-auto" style="height: 60px;" />
                                        <h1 class="header-sec1 my-auto ms-3">Tech</h1><span class="fs-1 header-sec2 my-auto">&nbsp;C</span><span class="fs-1 my-auto header-sec3">rush</span>
                                    </div>
                                </button>
                                <div class="my-auto d-flex flex-row">
                                    <nav class="navbar">
                                        <ul class="list-group list-unstyled list-group-horizontal border-0">
                                            <a href="https://twitter.com/DulanjayaBhanu" class="list-group-item fs-5 border-0 bg-transparent text-decoration-none def-link d-none d-md-block d-lg-block">Twitter</a>
                                            <a href="#" class="fs-5 bg-transparent text-decoration-none def-btn def-btn-green my-auto ps-3 pe-3 pt-2 pb-2">Subscribe</a>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12 mt-5 mb-4">
                                <div class="row">
                                    <div class="col-12 mt-3 mb-4 text-center">
                                        <span class="fs-4 nr-text">Tech Industry</span>
                                    </div>
                                    <div class="offset-0 offset-md-1 offset-lg-2 col-12 col-md-10 col-lg-8 pt-2 text-center">
                                        <span class="header-sec3 fs-1">These Are The Best Frameworks For Full-stack Developers In 2023</span>
                                    </div>
                                    <div class="col-12 mt-2 mb-5 text-center">
                                        <span class="fs-6 nr-text">Published on July 20, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Main header -->
                    <!-- Contend -->
                    <section>
                        <div class="offset-0 offset-md-1 offset-lg-1 col-12 col-md-10 col-lg-10 ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pb-3 pt-3">
                            <div class="col-12 pt-3 pb-3">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="resources/images/artical_images/7.jpg" class="def-card img-fluid" style="height: 400px;" />
                                    </div>
                                    <div class="col-12 text-center  mt-3">
                                        <span class="text-muted">The Best Frameworks For Full-stack Developers In 2023</span>
                                    </div>
                                </div>
                            </div>
                            <p class="fs-5 mt-3 pst-text">This article was originally published on .Cult by Luis Minvielle. .Cult is a Berlin-based community platform for developers. We write about all things career-related, make original documentaries, and share heaps of other untold developer stories from around the world.</p>
                            <p class="fs-5 mt-3 pst-text">Remember when you first saw a Hollywood-imagined IRL developer, furiously typing lines of code while ominous music played in the background? Little did you know that one day you&apos;d become a full-stack developer yourself, well, maybe minus the dramatic musical background?</p>
                            <p class="fs-5 mt-3 pst-text">If you&apos;re already here, you&apos;re probably sitting in your coffee-smelling workroom pointlessly trying to decipher the enigmatic world of frameworks and libraries.</p>
                            <p class="fs-5 mt-3 pst-text">Let&apos;s cut to the chase. The best way to become a full-stack code wizard is by learning about the different frameworks to choose from and then figuring out the best fit for you. Buckle up, we&apos;re going to dive headfirst into a world filled with headache-inducing glitches and technological wonders.</p>
                            <h4 class="header-sec1">Frameworks vs. Libraries</h4>
                            <p class="fs-5 mt-3 pst-text">The &lt;3 of EU tech</p>
                            <p class="fs-5 mt-3 pst-text">The latest rumblings from the EU tech scene, a story from our wise ol' founder Boris, and some questionable AI art. It's free, every week, in your inbox. Sign up now!</p>
                            <p class="fs-5 mt-3 pst-text">It&apos;s essential to understand the distinction between frameworks and libraries, as they serve different purposes and have unique structures. A framework is a cohesive and reusable structure of code that simplifies the process of software development by providing a foundation upon which developers can build their applications. In this article, we&apos;ll discuss some of the most popular frameworks such as Laravel, Django, and Ruby on Rails.</p>
                            <p class="fs-5 mt-3 pst-text">On the other hand, a library is a collection of pre-written, reusable functions, classes, or modules that can be easily incorporated into someone&apos;s code to perform specific tasks or add functionalities. While frameworks dictate the structure of an application, libraries offer a more modular approach, allowing developers to pick the components they need without affecting the application&apos;s architecture.</p>
                            <p class="fs-5 mt-3 pst-text">Each framework has its positive and negative aspects, so it&apos;s essential to pick one that&apos;s right for your project.</p>
                            <h4 class="header-sec2">The top frameworks in 2023</h4>
                            <p class="fs-5 mt-3 pst-text">The tech world offers plenty of frameworks to navigate this process, each having its own unique set of features and benefits designed to cater to different needs and preferences.</p>
                            <p class="fs-5 mt-3 pst-text">Here is a list of the best frameworks for full-stack development:</p>
                            <ol type="1">
                                <li class="fs-5 pst-text"><b class="fs-4 pst-text">Node.Js</b>
                                    <div class="col-12 pt-3 pb-3">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <img src="resources/images/artical_images/8.png" class="def-card img-fluid" style="height: 400px;" />
                                            </div>
                                            <div class="col-12 text-center  mt-3">
                                                <span class="text-muted">Node.Js</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-5 mt-3 pst-text">Node.Js is a server-side JavaScript runtime environment that enables the use of JavaScript for backend development. Express.Js, is a popular backend framework that can be used with Node.Js to establish the MEAN stack, which is perfect for developing web applications.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">Benefits:</i> It has a gigantic community of active developers, a rich set of features, libraries, and all-around good performance and growth potential. Node.Js can be used together with React.Js to create growth-oriented, resilient, and effective web applications as it&apos;s highly scalable. This framework is compact, lightweight, and effective. It has a built-in package manager, which reduces the lines of code needed.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">When to choose it:</i> If you&apos;re looking for a framework that combines potency with user-friendliness. It&apos;s used for web applications that are demanding in nature, such as video streaming websites and real-time applications. Knowing your way around JavaScript is a must to use this framework.</p>
                                </li>
                                <li class="fs-5 pst-text"><b class="fs-4 pst-text">React</b>
                                    <div class="col-12 pt-3 pb-3">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <img src="resources/images/artical_images/9.jpg" class="def-card img-fluid" style="height: 400px;" />
                                            </div>
                                            <div class="col-12 text-center  mt-3">
                                                <span class="text-muted">React</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-5 mt-3 pst-text">Did you know we recently dropped a long-form documentary about React? I suggest you go watch it ASAP if you&apos;d like to know about its origins.</p>
                                    <p class="fs-5 mt-3 pst-text">React is a frontend JavaScript library used to build user interfaces. It&apos;s a popular choice for full-stack developers, as it can be used on both frontend and backend web applications. It&apos;s employed for managing the presentation layer of web applications.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">Benefits:</i> Its greatest advantage is the use of virtual DOM. React is fast and can increase performance greatly. React is also used to make up reusable UI structures, which is a huge advantage as they reduce the time needed to code from scratch. This saves considerable effort and resources. Code readability is ensured by the components model of this framework, making it accessible for extensive apps to be developed and coded.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">When to choose it:</i> Being capable of using JavaScript and CSS is vital to work with this framework, although it&apos;s one of the simplest programming languages to learn. If you&apos;re looking for a framework that combines power and user-friendliness, then React is one of the most outstanding options for you.</p>
                                </li>
                                <li class="fs-5 pst-text"><b class="fs-4 pst-text">Laravel</b>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="resources/images/artical_images/10.jpg" class="def-card img-fluid" style="height: 400px;" />
                                        </div>
                                        <div class="col-12 text-center  mt-3">
                                            <span class="text-muted">Laravel</span>
                                        </div>
                                    </div>
                                    <p class="fs-5 mt-3 pst-text">Laravel is an open-source PHP web application framework that is used for building scalable and secure web applications. This framework eases everyday tasks used in the majority of web projects (authentication, routing, sessions, and caching), without sacrificing the application&apos;s functionality.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">Benefits:</i> When designing a web application, Laravel will make it more expandable and adaptable. You also save a lot of time since Laravel uses components from other frameworks multiple times in a way that helps to organise and manage resources. It also has a comprehensive range of features that can boost the speed of web development. Your webpage will also be safe as Laravel has mechanisms that prevent a significant number of web attacks.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">When to choose it:</i> If you&apos;re building a website from scratch and are comfortable with Core PHP and Advanced PHP, this framework will simplify your task.</p>
                                </li>
                                <li class="fs-5 pst-text"><b class="fs-4 pst-text">AngularJS</b>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="resources/images/artical_images/11.png" class="def-card img-fluid" style="height: 400px;" />
                                        </div>
                                        <div class="col-12 text-center  mt-3">
                                            <span class="text-muted">AngularJS</span>
                                        </div>
                                    </div>
                                    <p class="fs-5 mt-3 pst-text">Angular is a frontend JavaScript framework. It&apos;s an open-source framework that was developed by Google to help programmers build single-page web applications.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">Benefits:</i> It offers numerous features that help the app progress faster and easier. Angular can work in conjunction with backend servers to create a full-stack application. With Angular, the development of the front and back end can be done at the same time, and it also uses reusable components that enhance maintainability. Angular runs on the web, and since it&apos;s a JavaScript framework, it also has astounding tooling for any issue and an easy onboarding process.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">When to choose it:</i> When you need to solve issues faced in single-page applications. Angular is an excellent choice for big, complex projects because it&apos;s feature-rich.</p>
                                </li>
                                <li class="fs-5 pst-text"><b class="fs-4 pst-text">Django</b>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="resources/images/artical_images/12.png" class="def-card img-fluid" style="height: 400px;" />
                                        </div>
                                        <div class="col-12 text-center  mt-3">
                                            <span class="text-muted">Django</span>
                                        </div>
                                    </div>
                                    <p class="fs-5 mt-3 pst-text">Django is a Python web framework that is used for building web applications quickly and efficiently. It includes a series of features that are now fundamental for web development training.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">Benefits:</i> Django is exceptionally flexible and expandable. The most important feature is the reusability of its mechanisms and systems. It tends to use fewer code sentences, resulting in low coupling and fast development. Django is also made of a lightweight web server, suitable for tryouts and progress monitoring.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">When to choose it:</i> It&apos;s one of the best frameworks for full-stack web development. It works perfectly for projects that need to handle significant scaled content or deal with advanced technological functions. Although it works amazingly well for complicated tasks, it&apos;s easy to use and can be of great help for smaller projects that need to grow.</p>
                                </li>
                                <li class="fs-5 pst-text"><b class="fs-4 pst-text">Express</b>
                                <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="resources/images/artical_images/13.png" class="def-card img-fluid" style="height: 400px;" />
                                        </div>
                                        <div class="col-12 text-center  mt-3">
                                            <span class="text-muted">Express Js</span>
                                        </div>
                                    </div>
                                    <p class="fs-5 mt-3 pst-text">Express is a robust Node.Js web application framework that is used for building dynamic web applications and providing robust features. It is used for building single-page, multipage, and hybrid web applications. It&apos;s a layer built on top of Node.Js that helps server management.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">Benefits:</i> It can build applications in a simple, efficient, and quick way with the use of JavaScript, hence reducing coding time almost by half.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">When to choose it:</i> If you want to build a single page, multipage, and hybrid web application (or even a mobile app). If you already know JavaScript this framework will be very easy to use.</p>
                                </li>
                                <li class="fs-5 pst-text"><b class="fs-4 pst-text">Ruby on Rails</b>
                                <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="resources/images/artical_images/14.jpg" class="def-card img-fluid" style="height: 400px;" />
                                        </div>
                                        <div class="col-12 text-center  mt-3">
                                            <span class="text-muted">Ruby on Rails</span>
                                        </div>
                                    </div>
                                    <p class="fs-5 mt-3 pst-text">Ruby on Rails is a backend framework, based on the language Ruby. It&apos;s a popular web application framework that is used for building quickly and efficiently. Ruby allows easy migration and database tablet creation, facilitating faster application development.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">Benefits:</i> Ruby on Rails offers a full library of open-source code, meaning that developers and programmers can easily find code fragments that can improve the performance of their projects. It&apos;s also a reliable platform for users because it is constantly being updated.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">When to choose it:</i> Whether you&apos;re working on a small or large-scale project, this framework allows you to quickly model and construct web applications with little configuration. It&apos;s great for building scalable websites and applications.</p>
                                </li>
                                <li class="fs-5 pst-text"><b class="fs-4 pst-text">Flask</b>
                                <div class="col-12 text-center">
                                            <img src="resources/images/artical_images/15.jpg" class="def-card img-fluid" style="height: 400px;" />
                                        </div>
                                        <div class="col-12 text-center  mt-3">
                                            <span class="text-muted">Flask</span>
                                        </div>
                                    <p class="fs-5 mt-3 pst-text">Flask is a lightweight Python web framework that is used for building small and medium-sized web applications. This framework allows developers to maintain the application logic apart from the presentation layer, leading to code that&apos;s cleaner and easier maintain.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">Benefits:</i> Flask doesn&apos;t need special tools or libraries to function. It&apos;s simple and effective to begin with because it has a debugging and built-in development server.</p>
                                    <p class="fs-5 mt-3 pst-text"><i class="fs-5 pst-text fw-bold">When to choose it:</i> If you&apos;re looking for an extensible and lightweight full-stack framework.</p>
                                </li>
                            </ol>
                            <p class="fs-5 mt-3 pst-text">That&apos;s all, folks. Our whirlwind tour of the best frameworks for full-stack developers in 2023 has come to an end. Armed with these top-notch frameworks and libraries, you&apos;ll be paving the road towards coding greatness. So, go forth and conquer the coding realm!</p>
                        </div>
                    </section>
                    <!-- Contend -->
                <?php
                }
                ?>
                <!-- Section -->
                <section class="col-12 mb-3">
                    <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3 pb-3">
                        <div class="col-12 text-center pt-5">
                            <h1>Join our newsletter to read delightful </br><span class="fs-1 header-sec1 my-auto">Tech</span><span class="fs-1 header-sec2 my-auto">&nbsp;C</span><span class="fs-1 my-auto header-sec4">rush</span> every SunDay!</h1>
                        </div>
                        <div class="col-12 text-center mt-3">
                            <span class="text-muted">This newsletter will keep you up to date with <span class="header-sec2">Tech Cruch</span> releases. Get the inside scoop on <br />web development, interview preparation, career development, SEO, and best tools!</span>
                        </div>
                        <div class="col-12 d-flex flex-row justify-content-center mt-5">
                            <div class="row col-12 col-md-10 col-lg-8 d-flex flex-row justify-content-center g-3">
                                <div class="col-12 col-md-4 col-lg-4">
                                    <input type="text" class="def-input w-100 ps-4 pe-4 pt-3 pb-3" placeholder="Name" />
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <input type="text" class="def-input def-input2 w-100 ps-4 pe-4 pt-3 pb-3" placeholder="Email" />
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-center d-flex flex-row justify-content-start">
                                    <button class="d-grid def-btn def-btn-green w-100 my-auto ps-4 pe-4 pt-3 pb-3">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section -->
                <!-- Main footer -->
                <footer class="col-12 mt-5 pb-4 header-cover4">
                    <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3">
                        <div class="col-12 mt-5">
                            <div class="row">
                                <button class="bg-transparent border-0" onclick="window.location='index.php';">
                                    <div class="d-flex flex-row">
                                        <img src="resources/images/icon.png" class="my-auto" style="height: 60px;" />
                                        <h1 class="header-sec1 my-auto ms-3">Tech</h1><span class="fs-1 header-sec2 my-auto">&nbsp;C</span><span class="fs-1 my-auto header-sec3">rush</span>
                                    </div>
                                </button>
                                <div class="col-12 mt-5">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 mb-5 mb-md-0 mb-lg-0">
                                            <div class="d-flex flex-row gap-5">
                                                <div>
                                                    <h4 class="nr-text">Categories</h4>
                                                    <div class="col-12 d-flex flex-row gap-3 pt-3">
                                                        <ul class="list-group list-unstyled">
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">HTML</a></li>
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">CSS</a></li>
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">JavaScript</a></li>
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">PHP</a></li>
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">MySQL</a></li>
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">React Native</a></li>
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">MySQL</a></li>
                                                        </ul>
                                                        <ul class="list-group list-unstyled">
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">API</a></li>
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">Tech Industry</a></li>
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">Tools</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4 class="nr-text">Links</h4>
                                                    <div class="col-12 d-flex flex-row gap-3 pt-3">
                                                        <ul class="list-group list-unstyled">
                                                            <li class="list-item"><a href="https://twitter.com/DulanjayaBhanu" class="text-decoration-none def-link def-link2">Twitter</a></li>
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">FaceBook</a></li>
                                                            <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">LinkedIn</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 d-flex flex-row justify-content-center justify-content-md-end justify-content-lg-end align-items-end">
                                            <span class="nr-text">&copy; <?php echo (date("Y")); ?>-Tech Crush. All Rights Reserved.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Main footer -->
            </div>
        </div>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location:index.php");
}
?>