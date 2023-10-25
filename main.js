class MyHeader extends HTMLElement {
    connectedCallback(){
        this.innerHTML = `
            <header class="header">
                <div class="container_background"></div>
                
                <div class = logo>
                <img src="Component 84 – 1.png" alt="Logo">
                </div>
                
                <div class="mail"><img src="Component 85 – 1.png" ></div>
                <div class="error"><a href="#">FEHLER : Database fehler</a></div>
                <div class="header-right">
                    <div class="container_background"></div>
                    <p id="de">DE</p>
                    <img src="Path 2190.png" id="admin0">
                    <p id="admin">Admin</p>
                    <img src="ic-calendar.png" id="calender">
                    <p id="date"></p>
                    <img src="Asset 3@4x.png" id="protion">
                </div>
                <nav>
                    <ul>
                        <p id="user-name"> Dharani </p>
                        <p id="user-id"> ID: 1702</p>
                        <img src="Path 1721.png" id = "user-info">
                        <a id="home" href="home.php" >Startseite</a>
                        <div class = home-icon><img src="Icon metro-home.png"></div>
                        <a id="data" href="data.php" >Daten</a>
                        <div class = "data-icon" ><img src="Component 86 – 1.png"></div>
                        <a id="statistics" href="statistics.php">Statistik</a>
                        <div class = statistics-icon><img src="Component 87 – 1.png"></div>
                        <a id="reports" href="report.php" >Berichte</a>
                        <div class = reports-icon><img src="Component 88 – 1.png"></div>
                        <a id="settings" href="setting.php">Einstellungen</a>
                        <div class = settings-icon><img src="Component 89.png" ></div>
                        <a id="help" href="help.php" >Hilfe</a>
                        <div class = help-icon><img src="Component 90.png"></div>
                        <img src="Asset 1@16x.png" id="pro-icon"></img>
                        <div class="line_bar_header3"></div>
                        <div class="line_bar_header1"></div>
                        <div class="line_bar_header2"></div>
                        <div class="line_bar_header4"></div>
                        <div class="line_bar_header5"></div>
                    </ul>
                </nav>
            </header>
        `;
    }
}
customElements.define('my-header', MyHeader);

class MyMain extends HTMLElement {
    connectedCallback(){
        this.innerHTML = `
        <main class="main">
            <div class="container_backgroundmain"></div>
            <div class="h_text_underline"></div>
            <div class="username_underline"></div>
            <div class="data-container"></div>
            
            </main>
        `;
    }
}
customElements.define('my-main', MyMain);

class MyMainContainer extends HTMLElement {
    connectedCallback(){
        this.innerHTML = `
        <maincontainer class="maincontainer">
            <div class="data-container4data"></div>
            <div class="container_line2"></div>
            <div class="container_line3"></div>
            <div class="container_line4"></div>
            <div class="container_searchlogo">
                <input type="text" class="search-input"><img class ="search_icon" src = "Icon ionic-ios-search.png"></img>
                <button onclick="" class="search-button"><img class="search-button" src = "Component 124.png"></img></button>
            </div>

            <div class="dropdown">Filter
                <span class="arrow">▼</span>
                <ul class="options">
                    <li>Today</li>
                    <li>Last Week</li>
                    <li>Last Month</li>
                    <li>This Year</li>
                    <li>Last Year</li>
                </ul>
            </div>
            <div class="date-pickerstart">Datum von<input type="date" id="start-date"></div>
            <div class="date-pickerend">bis<input type="date" id="end-date"></div>
            <button class="go-button"><img id = "go-icon" src="Component 124  gray.png"></img></button>
            <div class="result_count">Eigebnisse</div>
            <div class="result_count_number">0</div>
        </maincontainer>
        `;
    }
}
customElements.define('my-maincontainer', MyMainContainer);

class MyFooter extends HTMLElement {
    connectedCallback(){
        this.innerHTML = `
            <footer class="footer">
                <div class = "home_icon">
                    <img src="Icon metro-home-2.png" alt="">
                </div>
                <div class = "arrow_back">
                    <img src="Icon ionic-ios-arrow-back.png" alt="">
                </div>
                <div class = "arrow_back1">
                    <img src="Icon ionic-ios-arrow-back-1.png" alt="">
                </div>
                <div class="no">
                    <p id="machine">Masch No:</p>
                    <p id="status">STATUS:</p>
                </div>
                <div class="line_bar_footer1"></div>
                <div class="line_bar_footer2"></div>
                
        
            </footer>
        `;
    }
}

customElements.define('my-footer', MyFooter);



class MySidebarForLayer extends HTMLElement {
    connectedCallback(){
        this.innerHTML = `
        <sidebarforlayer class="sidebarforlayer">
            <div class="main_for_layer"></div>
            <div class="sidebar_for_layer"></div>
            <div class="main_block_for_layer"></div>
            <div class="image_area_for_layer"></div>
            <div class="sidebar_text_1">Teilenummer</div>
            <div class="sidebar_text_2">Zeitstempel</div>
            <div class="sidebar_text_3">Fertigungsauftrag</div>
            <div class="sidebar_text_4">Productbezeichtung</div>
            <div class="sidebar_text_5">Teile-Nr</div>
            <div class="sidebar_pdflogo1"><img src="Icon awesome-print.png"></img></div>
            <div class="sidebar_pdflogo2"><img src="Icon awesome-print.png"></img></div>
            <div class="close_layer"></div>
            </sidebarforlayer>
        `;
    }
}
customElements.define('my-sidebarforlayer', MySidebarForLayer);