<!DOCTYPE html>
<html>
  <head>
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- <%= csrf_meta_tags %>
    <%= csp_meta_tag %> -->
    <link rel="stylesheet"
        href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/includes/css/output.css">
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
    <?php include("../layout/navbar.php") ?>
    <!-- <%= render 'home/navigation' %>
    <% if notice %>
      <%= render 'home/alerts' %>
    <% end %> -->
    <main class="flex-grow">
        <div class="m-0 overflow-hidden">
            <div class="w-4/6 m-auto mb-20">
                <h1 class="text-center font-bold text-2xl text-red-500">Contact</h1>
                <div class="border-b-2 w-12 border-black m-auto mb-5 mt-1">
                </div>
                <!-- <%# horizontal line %> -->
                <div class="bg-f-gradient-1 bg-opacity-50  md:w-1/2 w-full m-auto">
                    <div class="lg:text-base md:text-sm text-xs p-5 text-center">
                        <div class="text-left inline-block">
                            <a href="/files/ALevesqueResume.pdf" download="ALevesqueResume.pdf" class="m-auto flex mb-5">
                                <img class="h-6 mt-3 mr-3" src="../../images/TEmail.png">
                                <div>
                                    <h2>Resume</h2>
                                    <div class="hover:underline">ALevesqueResume.pdf</div>
                                </div>
                            </a>
                            <a href="mailto:anthonylevesque70@gmail.com" class="m-auto flex mb-5">
                                <img class="h-6 mt-3 mr-3" src="../../images/TEmail.png">
                                <div>
                                    <h2>Email</h2>
                                    <div class="hover:underline">anthonylevesque70@gmail.com</div>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/in/anthonylevesque70/" target="_blank" class="m-auto flex mb-5">
                                <img class="h-6 mt-3 mr-3" src="../../images/TLinkedIn.png">
                                <div>
                                    <h2>LinkedIn</h2>
                                    <div class="hover:underline">linkedin.com/in/anthonylevesque70/</div>
                                </div>
                            </a>
                            <div class="m-auto flex mb-5">
                                <img class="h-6 mt-3 mr-3" src="../../images/TPhone.png">
                                <div>
                                    <h2>Phone</h2>
                                    <div>Upon request</div>
                                </div>
                            </div>
                            <a href="https://www.anthonylevesque.com/" target="_blank" class="m-auto flex mb-5">
                                <img class="h-6 mt-3 mr-3" src="../../images/TWebsite.png">
                                <div>
                                    <h2>Website</h2>
                                    <div class="hover:underline">anthonylevesque.com</div>
                                </div>
                            </a>
                            <div class="m-auto flex">
                                <img class="h-6 mt-3 mr-3" src="../../images/TPin.png">
                                <div>
                                    <h2>Location</h2>
                                    <div>Calgary, Alberta</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-5xl w-3/4 mt-20 mb-24 mx-auto">
                <h2>Hire for the Soul<h2>
                <h2>Train for the Role</h2>
            </div>
        </div>
    </main>
    <?php include("../layout/footer.php") ?>
  </body>
</html>
