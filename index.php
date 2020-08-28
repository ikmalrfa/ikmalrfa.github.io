<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="manifest" href="manifest.json">
</head>
<!-- ini untuk halaman web pribadi -->
<body>
    <div class="content">
        <div class="con-user">
            <div class="avatar">
                <img src="https://l.top4top.io/p_1696pz9ed0.jpg" alt="">
            </div>
            <div class="title">
                <h1>
                    Ikmal Rafa M
                </h1>
                <p>
                    Frontend developer <br>Ceo & Founder <a target="_blank" href="http://spacexploiter.eu5.org/">Space Xploiter</a> 
                </p>
            </div>
        </div>
        <div class="con-menu">
            <button onclick="handleClick(event, 'con-links')" class="active">
                Activity
            </button>
            <button onclick="handleClick(event, 'con-posts')">
                Tools
            </button>
        </div>
        <div class="con-contents">
            <div class="con-links">
                <a target="_blank" href="https://www.instagram.com/ikmrfa_/">
                    <i class="bx bxl-instagram-alt"></i>
                    <span>
                        Instagram
                    </span>
                </a>
                <a target="_blank" href="https://spacexploiter.blogspot.com/">
                    <i class="bx bxl-blogger"></i>
                    <span>
                        Blog
                    </span>
                </a>
                <a target="_blank" href="https://ikmalrfa.github.io/">
                    <i class="bx bxl-github"></i>
                    <span>
                        Github
                    </span>
                </a>
                <a target="_blank" href="http://Wa.me/6285722380004">
                    <i class="bx bxl-whatsapp"></i>
                    <span>
                        Whatsapp
                    </span>
                </a>
            </div>

            <div class="con-posts">
                <a class="post" target="_blank" href="https://ikmalrfa.github.io/404/">
                    <div class="con-file">
                        <img src="https://l.top4top.io/p_16968hjl11.png" alt="">
                    </div>

                    <footer>
                        <h3>
                            <i class="bx bxl-android"></i>
                            Tools Deface
                        </h3>
                        <p>
                            Tools From Us
                        </p>
                    </footer>

                    <div class="effect"></div>
                </a>
                <a class="post" target="_blank" href="https://ikmalrfa.github.io/404/">
                    <div class="con-file">
                        <img src="https://i.top4top.io/p_16969xc290.png" alt="">
                    </div>

                    <footer>
                        <h3>
                            <i class="bx bxl-google"></i>
                            Search here
                        </h3>
                        <p>
                            Look for creative ideas
                        </p>
                    </footer>

                    <div class="effect"></div>
                </a>
                <a class="post" target="_blank" href="https://ikmalrfa.github.io/404/">
                    <div class="con-file">
                        <img src="https://f.top4top.io/p_1696rxfw30.png" alt="">
                    </div>

                    <footer>
                        <h3>
                            <i class="bx bxl-dribbble"></i>
                            Admin Finder
                        </h3>
                        <p>
                            Start looking for the admin page
                        </p>
                    </footer>

                    <div class="effect"></div>
                </a>
                <a class="post" target="_blank" href="https://ikmalrfa.github.io/404/">
                    <div class="con-file">
                        <img src="https://h.top4top.io/p_1696jpx8k0.png" alt="">
                    </div>

                    <footer>
                        <h3>
                            <i class="bx bxl-codepen"></i>
                            Live Coding
                        </h3>
                        <p>
                            Start creating a new project
                        </p>
                    </footer>

                    <div class="effect"></div>
                </a>
            </div>
        </div>
    </div>
</body>
<script>
    const user = document.querySelector('.con-user')
    const menu = document.querySelector('.con-menu')
    const contents = document.querySelector('.con-contents')
    const links = document.querySelector('.con-contents .con-links')
    const posts = document.querySelector('.con-contents .con-posts')
    window.addEventListener("load", function(event) {
        const vh = window.innerHeight * 0.01
        document.documentElement.style.setProperty('--vh', `${vh}px`)

        setTimeout(function () {
        window.scrollTo(0, 1)
        }, 0)
        const h = window.innerHeight - menu.clientHeight - user.clientHeight
        contents.style.height = `${h}px`
        links.style.height = `${h}px`
        posts.style.height = `${h}px`
    })

    function handleClick(evt, name) {
        const items = document.querySelectorAll('.con-menu button')
        const el = evt.target
        items.forEach((item) => {
            item.classList.remove('active')
        })
        el.classList.add('active')
        const elScroll = document.querySelector(`.${name}`)
        contents.scrollTo(elScroll.offsetLeft, 0)
    }

    contents.addEventListener('scroll', (evt) => {
        if (evt.target.scrollLeft > window.innerWidth / 2 && evt.target.scrollLeft < window.innerWidth + (window.innerWidth / 2)) {
            menu.querySelector('button:nth-child(1)').classList.remove('active')
            menu.querySelector('button:nth-child(2)').classList.add('active')
            menu.querySelector('button:nth-child(3)').classList.remove('active')
        } else if (evt.target.scrollLeft < window.innerWidth / 2) {
            menu.querySelector('button:nth-child(1)').classList.add('active')
            menu.querySelector('button:nth-child(2)').classList.remove('active')
            menu.querySelector('button:nth-child(3)').classList.remove('active')
        } else if (evt.target.scrollLeft > window.innerWidth + (window.innerWidth / 2)) {
            menu.querySelector('button:nth-child(2)').classList.remove('active')
            menu.querySelector('button:nth-child(3)').classList.add('active')
        }
    })
</script>
<style>
    body {
        --primary: 25,91,255;
        --color: 44, 62, 80;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        height: 100vh;
        background: #f4f7f8;
        height: calc(var(--vh, 1vh) * 100);
        overflow: hidden;
        color: rgb(var(--color));
    }
    * {
        list-style: none;
        outline: none;
        padding: 0;
        margin: 0;
        font-family: 'Playfair Display', serif;
        box-sizing: border-box;
    }
    .content {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        overflow: hidden;
    }
    .con-user {
        padding-top: 10px;
        width: 100%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background: #fff;
        padding-bottom: 10px;
        border-radius: 0px 0px 40px 0px;
    }
    .con-user .title {
        text-align: center;
        width: 100%;
    }
    .con-user .title h1 {
        font-size: 1.1rem;
        padding: 0px 0px;
    }
    .con-user .title p {
        font-size: .9rem;
        opacity: .6;
        padding: 6px 10px;
    }
    .con-user .title p a {
        color: rgb(var(--text));
    }
    .avatar img {
        width: 100px;
        border-radius: 30px;
    }
    .con-menu {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        max-width: 500px;
        margin: auto;
        width: 100%;
        position: relative;
        z-index: 10;
        box-shadow: 0px 15px 20px -5px rgba(0,0,0,.08);
        border-radius: 0px 0px 30px 30px;
    }
    .con-menu button {
        padding: 12px;
        width: calc(50% - 4px);
        border: 0px;
        background: transparent;
        font-weight: bold;
        color: rgb(var(--text));
        font-size: 1rem;
        transition: all .25s ease;
        box-shadow: 0px 0px 0px 0px rgba(0,0,0,.08);
        border-radius: 16px;
        z-index: 2;
    }
    .con-menu button.active {
        background: #fff;
        box-shadow: 0px 5px 25px 0px rgba(0,0,0,.06);
        color: rgb(var(--primary));
        /* transform: translate(0,-5px); */
    }
    .con-contents {
        width: 100%;
        overflow-x: auto;
        overflow-y: hidden;
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        flex: 1;
        height: 100%;
        position: relative;
        max-width: 500px;
    }
    .con-posts {
        min-width: 100%;
        scroll-snap-align: center;
        overflow: auto;
        padding-bottom: 30px;
        max-width: 500px;
    }
    .con-posts .post {
        width: calc(100% - 40px);
        overflow: hidden;
        box-sizing: border-box;
        display: block;
        margin: 20px;
        position: relative;
        color: rgb(var(--text));
        border-radius: 30px;
        box-shadow: 0px 5px 30px 0px rgba(0,0,0,.08);
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .con-file {
        width: 100%;
        padding-bottom: 100%;
        height: 0;
    }
    .con-posts .post img {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 0px;
        transform: translate(0,-50%);
    }
    .con-posts .post footer {
        position: absolute;
        bottom: 0px;
        z-index: 10;
        padding: 10px 20px;
    }
    .con-posts .post footer h3 {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .con-posts .post footer h3 i {
        margin-right: 5px;
        font-size: 1.4rem;
    }
    .con-posts .post .effect {
        position: absolute;
        bottom: 0px;
        height: 150px;
        width: 100%;
        background: linear-gradient(0deg, rgba(255,255,255,1) 30%, rgba(0,0,0,0.001) 100%);

    }
    .con-links {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        flex-direction: column;
        padding: 15px 20px;
        padding-top: 0px;
        max-width: 500px;
        width: 100%;
        margin: auto;
        min-width: 100%;
        scroll-snap-align: center;
        flex: 1;
        overflow: auto;
        padding-top: 20px;
    }
    .con-links a {
        display: block;
        width: 100%;
        padding: 18px 22px;
        text-decoration: none;
        font-size: 1rem;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgb(var(--primary));
        margin-bottom: 16px;
        border-radius: 25px;
        position: relative;
        box-shadow: 0px 10px 30px 0px rgba(var(--primary), .15);
    }
    .con-links a:last-child {
        margin-bottom: 40px;
    }
    .con-links a img {
        max-width: 22px;
        position: absolute;
        left: 20px;
    }
    .con-links a svg {
        width: 22px;
        fill: #fff;
        position: absolute;
        left: 20px;
    }
    .con-links a i {
        font-size: 1.6rem;
        position: absolute;
        left: 20px;
        /* margin-right: 8px; */
    }
    .con-links a span {
        text-align: center;
    }
    .con-links a span p {
        font-size: .8rem;
    }
    
</style>
</html>
