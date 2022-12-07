<!DOCTYPE  HTML> 
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>CS008 WebSite Design</title>
        <meta name="author" content="Rachel Koenig">
        <meta name="description" content="A site map to all my groovy assignments.">
        <style>
            /* basic CSS */
            body{
                margin: auto;
                padding: 3%;
                width: 90%;
            }

            figure {
                border: thin solid darkslategray;
                border-radius: 3%;
                padding: 3%;
                text-align: center;
            }

            figcaption {
                color: #839e99;
                font-style: italic;
                text-align: center;
            }

            img{
                border-radius: 3%;
                max-width: 100%
            }

            .right{
                float: right;
                margin-left: 3%;
            }

            .small {
                width: 20%;
            }
            
            /* Setting up a grid layout for the main inded page */
            .header{
                grid-area: header;
                grid-column: 1 / 3;
                padding: .5%;
                margin: .5%;
            }  
            .public-files{
                grid-area: public-files;
                padding: .5%;
                margin: .5%;
            }

            .supporting-files{
                grid-area: supporting-files;
                padding: .5%;
                margin: .5%;
            }
            .grader-notes{
                grid-area: grader-notes;
                padding: .5%;
                margin: .5%;
            }
            .grid-layout{
                border-bottom: thin dashed navy;
                display: inline-grid;
                grid-template-columns: 25% 25% 50%;
                grid-template-areas: "header header header"
                    "public-files supporting-files grader-notes"; 
                padding: .5%;
                margin: .5%;
                width: 100%;    
            }

        </style>    
        </head>
    <body>
        <figure class = "right small">
            <img alt="Rachel Koenig" src="images/rachel-koenig.png">
            <figcaption>Stopping in a coffee shop before moving into my sophmore year of college</figcaption>
        </figure> 

        <h1>CS 008-<em>A</em> Fall 2022</h1>
        <h2>Rachel Koenig - Site map</h2>
        <p><a href="ADMIN/admin.php">My Admin Folder</a></p>
        <p><a href="ADMIN/table-viewer.php?getDatabase=">Table Viewer</a></p>

        <section class="grid-layout">
            <h2 class="header">Final Project</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="final_project/array.php">array.php</a></p>
                <p><a href="final_project/detail.php">detail.php</a></p>
                <p><a href="final_project/form.php">form.php</a></p>
                <p><a href="final_project/index.php">index.php</a></p>  
    
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab9/css/custom.css">custom.css</a></p>
                <p><a href="lab9/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab9/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab9/sql.php">DB SQL Statements</a></p>
                <p><a href="lab9/images/records.png">DB records</a></p>

                <p><a href="lab9/footer.php">footer.php</a></p>
                <p><a href="lab9/header.php">header.php</a></p>
                <p><a href="lab9/nav.php">nav.php</a></p>
                <p><a href="lab9/top.php">top.php</a></p>

                <p><a href="lab9/images/wireframe.png">desktop wireframe</a></p>
                <p><a href="lab9/images/tablet.jpeg">tablet wireframe</a></p>
                <p><a href="lab9/images/phone.jpeg">phone wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>


        <section class="grid-layout">
            <h2 class="header">Lab Nine - Saving forms data.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab9/array.php">array.php</a></p>
                <p><a href="lab9/detail.php">detail.php</a></p>
                <p><a href="lab9/form.php">form.php</a></p>
                <p><a href="lab9/index.php">index.php</a></p>  
    
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab9/css/custom.css">custom.css</a></p>
                <p><a href="lab9/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab9/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab9/sql.php">DB SQL Statements</a></p>
                <p><a href="lab9/images/records.png">DB records</a></p>

                <p><a href="lab9/footer.php">footer.php</a></p>
                <p><a href="lab9/header.php">header.php</a></p>
                <p><a href="lab9/nav.php">nav.php</a></p>
                <p><a href="lab9/top.php">top.php</a></p>

                <p><a href="lab9/images/wireframe.png">desktop wireframe</a></p>
                <p><a href="lab9/images/tablet.jpeg">tablet wireframe</a></p>
                <p><a href="lab9/images/phone.jpeg">phone wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>


        <section class="grid-layout">
            <h2 class="header">Lab Eight - Database to display data.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab8/array.php">array.php</a></p>
                <p><a href="lab8/detail.php">detail.php</a></p>
                <p><a href="lab8/form.php">form.php</a></p>
                <p><a href="lab8/index.php">index.php</a></p>  
    
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab8/css/custom.css">custom.css</a></p>
                <p><a href="lab8/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab8/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab8/sql.php">DB SQL Statements</a></p>
                <p><a href="lab8/images/records.png">DB records</a></p>

                <p><a href="lab8/footer.php">footer.php</a></p>
                <p><a href="lab8/header.php">header.php</a></p>
                <p><a href="lab8/nav.php">nav.php</a></p>
                <p><a href="lab8/top.php">top.php</a></p>

                <p><a href="lab8/images/wireframe.png">desktop wireframe</a></p>
                <p><a href="lab8/images/tablet.jpeg">tablet wireframe</a></p>
                <p><a href="lab8/images/phone.jpeg">phone wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Seven - Arrays and includes.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab7/array.php">array.php</a></p>
                <p><a href="lab7/detail.php">detail.php</a></p>
                <p><a href="lab7/form.php">form.php</a></p>
                <p><a href="lab7/index.php">index.php</a></p>  
    
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab7/css/custom.css">custom.css</a></p>
                <p><a href="lab7/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab7/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab7/footer.php">footer.php</a></p>
                <p><a href="lab7/header.php">header.php</a></p>
                <p><a href="lab7/nav.php">nav.php</a></p>
                <p><a href="lab7/top.php">top.php</a></p>

                <p><a href="lab7/images/wireframe.png">desktop wireframe</a></p>
                <p><a href="lab7/images/tablet.jpeg">tablet wireframe</a></p>
                <p><a href="lab7/images/phone.jpeg">phone wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>


        <section class="grid-layout">
            <h2 class="header">Lab Six - CS 008 Responsive Design.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab6/detail.php">detail.php</a></p>
                <p><a href="lab6/form.php">form.php</a></p>
                <p><a href="lab6/index.php">index.php</a></p>      
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab6/custom.css">custom.css</a></p>               
                <p><a href="lab6/images/wireframe.png">desktop wireframe</a></p>
                <p><a href="lab6/images/tablet.jpeg">tablet wireframe</a></p>
                <p><a href="lab6/images/phone.jpeg">phone wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>


        <section class="grid-layout">
            <h2 class="header">Lab Five - Adding more style.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab5/detail.php">detail.php</a></p>
                <p><a href="lab5/form.php">form.php</a></p>
                <p><a href="lab5/index.php">index.php</a></p>      
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <a href="lab5/wireframe.png">wireframe</a>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Four - Basic CSS.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab4/detail.php">detail.php</a></p>
                <p><a href="lab4/form.php">form.php</a></p>
                <p><a href="lab4/index.php">index.php</a></p>      
      
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <a href="lab4/wireframe.png">wireframe</a>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Three - Adding a form and more detail.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab3/detail.php">detail.php</a></p>
                <p><a href="lab3/form.php">form.php</a></p>
                <p><a href="lab3/index.php">index.php</a></p>      
      
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <a href="lab3/wirefram.png">wireframe</a>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Two - Choosing your topic.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab2/index.php">index.php</a></p>      
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2>Lab one - Setting up your sitemap.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="test-page.php">Testing Page</a></p>      
            </section>
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

    </body>
</html>

