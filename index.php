<!DOCTYPE html>
<html>
  <head>
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- <%= csrf_meta_tags %>
    <%= csp_meta_tag %> -->
    <link rel="stylesheet"
        href="includes/css/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Rubik+Glitch">
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Russo+One">

    <!-- <%= stylesheet_link_tag "application", "data-turbo-track": "reload" %>
    <%= javascript_include_tag "application", "data-turbo-track": "reload", defer: true %> -->
  </head>

  <body class="bg-[url('images/HexagonBackground.jpg')] bg-1200 flex flex-col min-h-screen">
    <?php include("views/layout/navbar.php") ?>
    <!-- <%= render 'home/navigation' %>
    <% if notice %>
      <%= render 'home/alerts' %>
    <% end %> -->
    <main class="flex-grow">
        <div class="m-0 overflow-hidden">
            <div class="w-4/6 m-auto bg-white flex items-center mb-10 border-2 border-solid border-black">
                <div class="text-left p-8">
                    <h1 class="font-bold text-teal-blue text-lg"># About Me</h1>
                    <p class="mb-3">
                        Hello there, as you have probably already seen, my name is Anthony. I am a avid gamer and climber, I am bilingual and I love to take on new challenges to surpass them. If you have a challenge for me to attempt, send it my way and I'll take it head on.
                        I'm a recent graduate from NBCC in Moncton, New Brunswick and I have recently moved to Calgary, Alberta. The course I took was the IT: Web and Mobile Application Develpment which has been refactored/renamed to the IT: Software Develpment course.
                    </p>
                    <p class="mb-3">
                        I have gathered some good programming experience from College and as well as my past work experience after graduating. I believe I have a solid foundation to excel in most environment, and if I don't, I know I'll be able to learn and perform well. 
                        I'm looking for a job in the Greater Calgary Area and or a remote job in the Software Development field.
                    </p>
                    <p class="mb-3">
                        If you think I would be a great fit and or would like to get ahold of me, please navigate to the contact page. The contact page should contain the necessary information for you like my resume and email.
                    </p>
                    <p class="mb-3">
                        Please feel free to explore the website info page. This page contains more details regarding the before and after versions of my personal website.
                    </p>

                    <a href="#WebsiteInfo" class="font-bold hover:underline inline-flex">
                        <p>Explore More</p>
                        <img class="h-8" src="images/ArrowBottom.png">
                    </a>
                </div>
            </div>

            <div class="text-5xl w-3/4 mt-20 mb-24 mx-auto">
                <h2>Hire for the Soul<h2>
                <h2>Train for the Role</h2>
            </div>
        </div>
    </main>
    <?php include("views/layout/footer.php") ?>
  </body>
</html>
