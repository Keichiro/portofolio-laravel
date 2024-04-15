<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/AMD64bit.css">
    </head>
    <body>
        <table>
            <tr>
                <td width="10%">

                    <head>
                        <body style="background-image: url('/backs/background.gif'); background-size: cover; background-repeat: no-repeat;">
                            <title>AMD Proposed X86-64 Architecture</title>
                            <link rel="stylesheet" type="text/css" href="/css/AMD64bit.css">
                        </head>
                        
                        <body>
                            </style>
                        </head>
                        <body>
                        
                        <table>
                        <div align="left"><center>
                        <table border="0" cellpadding="0" cellspacing="0" width="600">
                          <tr>
                            <td width="170" valign="top" align="left"><table border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="170" height="90" valign="middle" align="left"><a href="/ebay"><img src="/images/capoologo.png" width="170" height="73" hspace="0" vspace="0" border="0" alt="eBay logo">
                                </td>
                                <td>
                                        <select onChange="window.location.href=this.value">
                                            <option hidden disabled selected>SELECT ONE OF THESE</option>
                                            <option value="https://www.intel.com">Intel</option>
                                            <option value="https://www.amd.com">AMD</option>
                                        </select>
                            </td>
                              </tr>
                              <tr>
                                <td width="25%" valign="top" align="left"><a href="https://web.archive.org/web/19990428103401/http://listings.ebay.com/aw/listings/list/index.html#categories"><img src="https://web.archive.org/web/19990428103401im_/http://pics.ebay.com/aw/pics/h_category.gif" width="169" height="28" hspace="0" vspace="0" border="0" alt="Categories"></a><br>
                        
                        <table border="0" cellpadding="1" cellspacing="0" width="100%">
                        <tr>
                        <td><font size="3"><a href="/netbook"><strong>Netbook</a></strong></font><font size="1">(20)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/laptop"><strong>Laptop</a></strong></font><font size="1"> (240)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/phone"><strong>Phone</a></strong></font><font size="1"> (777)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/desktop"><strong>Desktop</a></strong></font><font size="1"> (640)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/TN"><strong>Tech News</a></strong></font><font size="1"> (69550)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/accessories"><strong>Headphone</a></strong></font><font size="1"> (4288)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/games"><strong>Games</a></strong></font><font size="1"> (75)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/pna"><strong>Photo &amp; Electronics</a></strong></font><font size="1"> (32617)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/software"><strong>Software</a></strong></font><font size="1"> (130)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/console"><strong>Console</a></strong></font><font size="1"> (24)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/storage"><strong>Storage</a></strong></font><font size="1"> (223639)</font></td>
                        </tr>
                        <tr>
                        <td><font size="3"><a href="/kbm"><strong>Keyboard/Mouse</a></strong></font><font size="1"> (157739)</font></td>
                        </tr>
                        <tr>

                    </table>
                </td>
                <td>
                    
                    <div class="frame">
                        <h2><blink>AMD Proposed x86-64 architecture to change Market</blink></h2>
                        <div class="media-container">
                            <img src="/images/x86-64.gif" alt="Image" width="400" height="200">
                            <img src="/images/opmodes.gif" alt="Image" width="400" height="200">
                        </div>
                            <p>
                            The IA-64 ISA is significantly better than the x86 ISA in a number of ways, but the discussion of IA-64 is beyond the scope of this article as we're here to focus on x86. The biggest problem with the IA-64 ISA and thus IA-64 microprocessors is the lack of native x86 compatibility, effectively keeping IA-64 processors from running over two decades worth of software. Intel recognized this and equipped their IA-64 processors (Itanium, Itanium 2, etc…) with an x86-to-IA-64 decoder, that takes x86 instructions and decodes them into IA-64 instructions. This decoder is not the most efficient decoder nor is it the best way to run x86 code (the best way would be to run it natively on an x86 processor), and thus the Itanium and Itanium 2 offer quite poor performance under x86 applications.
                            </p>
                            <p>
                            The benefits of a 64-bit microprocessor architecture are mainly memory related; if you take two identical microprocessors, make one 64-bit and one 32-bit, the advantage of the 64-bit CPU is that it can address much more memory than the 32-bit CPU (2^64 vs. 2^32). For those that were hitting the limits of 32-bit memory addressability (4GB), Intel's only high performance solution was to transition to Itanium, but if all you're looking for is more than 4GB of memory and solid x86 performance, then you're SOL from Intel's perspective.
                            </p>
                            <p>
                            AMD's 64-bit strategy is significantly different; AMD has always been focused on the current customer needs, not on the vision of the computing future 5 - 10 years from now and this is reflected in their 64-bit strategy. The strategy is simple and has been done before in the past; stick with a high-performing x86 core, and simply extend the ISA to support 64-bit memory addressability - the end result is what AMD likes to call x86-64.
                            </p>
                            <table>
                                <tr>
                                    <th colspan="2">Additional Information</th>
                                </tr>
                                <tr>
                                    <td><b>Processor</b></td>
                                    <td><b>Processor Name (Planned)</b></td>
                                </tr>
                                <tr>
                                    <td>AMD Athlon Family K8</td>
                                    <td>AMD Athlon 3600+</td>
                                </tr>
                                <tr>
                                    <td>AMD Sempron Family K8</td>
                                    <td>AMD Sempron 2800+</td>
                                </tr>
                                <tr>
                                    <td>AMD Turion Mobile K8 Family</td>
                                    <td>AMD Turion 64 X2 TL-60</td>
                                </tr>
                                <tr>
                                    <td>AMD Athlon Mobile K8 Family</td>
                                    <td>AMD Athlon 64 TL-48</td>
                                </tr>
                            </table>
                            <div class="tab-container">
                                <!-- Tab content goes here -->
                            </div>
                            <div class="construction" style="bottom: 10px; right: 10px;"> <!-- Added inline style for position -->
                                <a href="https://example.com">
                                    <img src="/gifs/under_construction.gif" alt="Under Construction">
                                </a>
                            </div>
                        </div>
                    </body>
                    </table>
                    
                    </tr>
                    </table>
                    
                    </html>
                        </div>
                    </body>
                    </html>
                    <html>
                    <head>
                        <title>90s-style Tabs</title>
                        <style>
                            body {
                                background-color: #ffffff;
                                font-family: Arial, sans-serif;
                            }
                            .tab-container {
                                width: 100%;
                                margin: 20px auto;
                            }
                            .tab-row {
                                display: table;
                                width: 100%;
                                border-collapse: collapse;
                                border: 1px solid #000000;
                            }
                            .tab-cell {
                                display: table-cell;
                                padding: 10px;
                                border: 1px solid #000000;
                                background-color: #cccccc;
                                text-align: center;
                                font-weight: bold;
                            }
                            .tab-content {
                                display: none;
                                padding: 20px;
                                border: 1px solid #000000;
                                background-color: #ffffcc;
                            }
                            .tab-content.active {
                                display: block;
                            }
                            a {
                                text-decoration: none;
                                color: #000000;
                            }
                            input[type="text"], input[type="email"] {
                                width: 80%;
                                padding: 5px;
                                margin-bottom: 10px;
                            }
                            input[type="submit"] {
                                padding: 5px 10px;
                                background-color: #3366ff;
                                color: #ffffff;
                                border: none;
                                cursor: pointer;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="tab-container">
                            <div class="tab-row">
                                <div class="tab-cell"><a href="#tab1" onclick="showTab('tab1')">Comments</a></div>
                                <div class="tab-cell"><a href="#tab2" onclick="showTab('tab2')">Links</a></div>
                                <div class="tab-cell"><a href="#tab3" onclick="showTab('tab3')">Tab 3</a></div>
                            </div>
                            <div id="tab1" class="tab-content active">
                                <h3>Comment Tab</h3>
                                <form id="comment-form">
                                    <input type="text" name="name" placeholder="Your Name"><br>
                                    <input type="email" name="email" placeholder="Your Email"><br>
                                    <input type="text" name="comment" placeholder="Enter your comment">
                                    <br>
                                    <input type="submit" value="Submit">
                                </form>
                                <ul class="ui-tabview"> <!-- Added ul here -->
                                    <li class="active"><div></div></li>
                                    <li><div></div></li>
                                    <li><div></div></li>
                                </ul>
                                <div id="comment-section">
                                    <!-- Comments will appear here -->
                                </div>
                            </div>
                            <div id="tab2" class="tab-content">
                                <h3>Additional Reviews</h3>
                                <p><a href="/argh" style="color: red;">Links</a> tab content.</p>
                                <p><a href="/argh" style="color: red;">HP Pavilion 15</a> Review content.</p>
                                <p><a href="/argh" style="color: red;">HP Zhan X</a> Review content.</p>
                                <p><a href="/argh" style="color: red;">HP Zhan 66</a> Review content.</p>
                                <p><a href="/argh" style="color: red;">HP Envy 13</a> Review content.</p>
                            </div>
                            <div id="tab3" class="tab-content">
                                Content for Tab 3 goes here.
                            </div>
                        </div>
                    </body>
                    
                        <script>
                            // JavaScript code for handling tab switching
                            function showTab(tabId) {
                                var tabs = document.getElementsByClassName('tab-content');
                                for (var i = 0; i < tabs.length; i++) {
                                    tabs[i].classList.remove('active');
                                }
                                document.getElementById(tabId).classList.add('active');
                                
                                // Show the name and email fields only when Tab 1 is selected
                                if (tabId === 'tab1') {
                                    document.getElementById('name-field').style.display = 'block';
                                    document.getElementById('email-field').style.display = 'block';
                                } else {
                                    document.getElementById('name-field').style.display = 'none';
                                    document.getElementById('email-field').style.display = 'none';
                                }
                            }
                    
                            // JavaScript code for handling comment submission
                            document.getElementById('comment-form').addEventListener('submit', function(event) {
                                event.preventDefault(); // Prevent form submission
                                var nameInput = this.elements['name'];
                                var emailInput = this.elements['email'];
                                var commentInput = this.elements['comment'];
                                var name = nameInput.value.trim(); // Get name text
                                var email = emailInput.value.trim(); // Get email text
                                var comment = commentInput.value.trim(); // Get comment text
                                if (name !== '' && email !== '' && comment !== '') {
                                    // Create a new comment element
                                    var newComment = document.createElement('div');
                                    newComment.innerHTML = '<strong>' + name + '</strong> (' + email + '): ' + comment;
                                    document.getElementById('comment-section').appendChild(newComment);
                                    // Clear the form inputs
                                    nameInput.value = '';
                                    emailInput.value = '';
                                    commentInput.value = '';
                                } else {
                                    alert('Please fill in all fields.');
                                }
                            });
                        </script>
                    </body>
                    
                </td>
            </tr>

        </table>
    </body>
</html>