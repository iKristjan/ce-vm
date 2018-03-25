<html>
  <head>
    <meta charset=utf-8> 
    <title>Code Enigma | ce-vm development stack</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="http://ce-vm.codeenigma.net/favicon.ico" type="image/vnd.microsoft.icon" />
    <link type="text/css" rel="stylesheet" href="http://ce-vm.codeenigma.net/assets/css/style.css" media="all" />
  </head>
  <body>
    <header>
      <a href="/" title="ce-vm">
          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path d="M164.7,78.8L146,38.6c-8.1-13.2-23.1-18.6-33.7-12.1l-1.8,1.1l46.6,46.7L164.7,78.8z" class="d"/><path d="M174.3,84.5l-9.6-5.7l-7.6-4.5l7.8,7.8c0.8,0.6,1.5,1.2,2.2,1.9c6.5,6,9.9,13.9,9.8,21.2c0,4.3-1.4,8.5-4,11.9l-8.4,10.6l-22.8,28.8c-4.9,6.1-13.1,8.4-21.5,6.9c2.2,2.4,4.7,4.3,7.2,5.5l4.1,1.3l4,1.3c14.1,6.3,29.6,2.2,34.6-9.1l16.3-36.6l4.2-9.3C195.7,105.1,188.4,90.8,174.3,84.5z" class="m"/><path d="M59.4,124l4.3,1.4L46.9,104C44.1,110.8,49.6,119.7,59.4,124z" class="l"/><path d="M167.1,84c-0.7-0.6-1.4-1.3-2.2-1.9l-7.8-7.8l-46.6-46.7L91.1,8.3C79-1.3,63-1.2,55.3,8.5L9.1,66.8c-7.7,9.7-4.1,25.3,8,34.9l4.2,2.6L34.8,74c0.3-1.7,0.9-3.3,2-4.7l0.3-0.3l27.2-34.4c4.6-5.8,15.2-5,23.6,1.7l3.3,3.2l17.3,16.7l32,30.9c1.7,1.3,3.1,2.8,4.4,4.3c5.1,6.2,6.4,13.7,2.7,18.3l-18.6,23.5c-4.6,5.8-15.2,5-23.6-1.7l-18-11.6l13.6,17.9l16.2,21.4c0.9,1.5,2,2.9,3.1,4.2c8.4,1.6,16.6-0.7,21.5-6.9l22.8-28.8l8.4-10.6c2.7-3.4,4-7.5,4-11.9C177,98,173.6,90.1,167.1,84z" class="l"/><path d="M140.5,87.1l-32-30.9L91.2,39.5l-3.3-3.2c-8.5-6.7-19-7.5-23.6-1.7L37.1,69l-2.2,5l-13.5,30.3l-1.8,3.9c-5,11.3,2.3,25.6,16.4,31.9l52.2,16.4l-16.5-21.1l-7.9-10l-4.3-1.4c-9.8-4.4-15.3-13.3-12.5-20c0-0.1,0-0.1,0.1-0.2l3.4-7.7L65,63.4c3-6.7,13.4-8.6,23.3-4.2l7.9,4.5l48.6,27.7C143.6,89.9,142.1,88.4,140.5,87.1z" class="m"/><path d="M190,133.4l-3.6-7.7l-16.3,36.6c-5,11.3-20.5,15.4-34.6,9.1l-4-1.3c-1.4-0.2-2.8-0.7-4.1-1.3c-2.5-1.2-5-3-7.2-5.5c-1.1-1.2-2.2-2.6-3.1-4.2l-16.2-21.4l-13.6-17.9l-14.4-19c-5.7-9.2-5.1-19.8,1.1-23.7l22.2-13.6l-7.9-4.5C78.4,54.7,68,56.6,65,63.4L50.4,96.2l-3.4,7.7c0,0.1-0.1,0.1-0.1,0.2l16.8,21.4l7.9,10l16.5,21.1l20.9,26.6c8.1,13.2,23.1,18.6,33.7,12.1l42.9-26.3C196.1,162.5,198.1,146.6,190,133.4z" class="d"/></svg>
          <h1>ce-vm</h1>
      </a>
    </header>
    <nav>
        <a href="https://github.com/codeenigma/ce-vm">GitHub</a>
        <a href="https://ce-vm.readthedocs.io">Docs</a>
    </nav>
    <main>
      <?php
      foreach (glob('./includes/*.html') as $include) {
        print file_get_contents($include);
      }
      ?>
    </main>
    <footer>
      <h2><a href="https://www.codeenigma.com">We’re Code Enigma</a></h2>
      <p id="copyright">© Code Enigma <span class="spaced">2018</span></p>
    </footer>
  </body>
</html>