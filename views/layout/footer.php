<div class="w-full">
    
    <!-- <%# My bottom div that contains most stuff %> -->
    <div class="w-full">
        <!-- <%# Gradient top box %> -->
        <div class="bg-gradient-to-b from-f-gradient-1 from-50% via-f-gradient-2 to-f-gradient-3 text-black py-10 overflow-hidden relative z-30 text-center" style="border-radius: 100%/0 0 30px 30px;">
            <div class="w-10/12 m-auto">
                <div class="text-left p-2 mb-4">
                    <!-- <%= link_to home_old_website_path, class: "hover:underline" do %> -->
                        <a href="#" id="WebsiteInfo" class="text-2xl font-bold font-russo hover:underline"># Portfolio Info</a>
                    <!-- <% end %> -->
                    <p class="mb-2 mt-4">
                        This website is version 2.0 of my original website. It has changed quite a bit compared to version one. This website has a backend CRUD services similar like the original one, these operations are for Tools/Languages/Projects as well as login capabilities. All of these options are not available while the website is live. Please feel free to learn more fine details about the websites and it's process by clicking the link below or accessing the <a href="https://github.com/ALevesque03/portfolio" class="font-bold hover:underline" target="_blank">GitHub Repo.</a>
                    </p>
                    <!-- <%= link_to home_old_website_path, class: "font-bold hover:underline" do %> -->
                    <a href="#" class="font-bold hover:underline">
                        Click here to learn more
                    </a>
                    <!-- <% end %> -->
                </div>
                <div class="flex justify-around gap-5">
                    <div class="text-left">
                        <%= link_to skills_path, class: "flex gap-2 hover:underline" do %>
                            <%= image_tag("skills.png", class: "h-6" ) %>
                            <h1 class="text-lg font-bold">Skills</h1>
                        <% end %>
                        <p>I've learned all sorts of skills while working and attending college, including some like self-motivation, problem solver and more.</p>
                    </div>
                    <div class="text-left">
                        <%= link_to projects_path, class: "flex gap-2 hover:underline" do %>
                            <%= image_tag("projects.png", class: "h-6" ) %>
                            <h1 class="text-lg font-bold">Projects</h1>
                        <% end %>
                        <p>I have worked on a few projects throughout College, in the projects page, I have picked the top three, four if we count my website.</p>
                    </div>
                    <div class="text-left">
                        <%= link_to tools_path, class: "flex gap-2 hover:underline" do %>
                            <%= image_tag("wrench.png", class: "h-6" ) %>
                            <h1 class="text-lg font-bold">Tools</h1>
                        <% end %>
                        <p>I've gathered an arsenal of tools while at NBCC, and at my workplaces. These tools help me in my daily life as a programmer.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <%# White middle box %> -->
        <div class="w-full bg-white text-black pb-10 pt-12 overflow-hidden mt-[-1.5rem] relative z-20 text-center" style="border-radius: 100%/0 0 30px 30px;">
            <div class="w-full">
                <div class="w-3/4 m-auto flex justify-around gap-2">
                    <a href="#" class="text-2xl font-bold font-russo mr-4 hover:underline"># Contact</a>
                    
                    <!-- <%# Box containing icons and links to websites %> -->
                    <div class="text-left">
                        <div class="mb-4">
                            <p>Here are my social links, feel free to take a look and contact me, I'd be happy to get in touch with you.</p>
                        </div>
                        <div class="flex gap-9">
                            <a href="https://www.linkedin.com/in/anthonylevesque70/" target="_blank">
                                <img class="h-6" src="images/LinkedIn.png">
                            </a>
                            <a href="mailto:anthonylevesque70@gmail.com">
                                <img class="h-6" src="images/Email.png">
                            </a>
                            <a href="https://github.com/ALevesque03" target="_blank">
                                <img class="h-6" src="images/Github.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <%# Bottom grey box %> -->
        <div class="bg-neutral-700 text-white mt-[-1.5rem] relative z-10 text-center">
            <div class="flex justify-around pb-10 pt-12 w-10/12 m-auto gap-2">
                <!-- <%# First box %> -->
                <div class="text-center">
                    <div class="text-left inline-block">
                        <h1 class="font-rubik text-2xl">Anthony Levesque</h1>
                        <p>Curious about me?</p>
                        <div class="mb-2 mt-5">
                            <a href="#" class="border rounded-l border-white p-2 rounded text-white hover:text-black hover:bg-white">Get in touch</a>
                        </div>
                    </div>
                </div>
                <!-- <%# Second box %> -->
                <div class="flex-col">
                    <div>
                        <a href="#" class="hover:underline">About Me</a>
                    </div>
                    <div>
                        <a href="#" class="hover:underline">Projects</a>
                    </div>
                    <div>
                        <a href="#" class="hover:underline">Contact</a>
                    </div>
                </div>
                <!-- <%# Third box %> -->
                <div class="flex-col">
                    <div>
                        <a href="#" class="hover:underline">Languages</a>
                    </div>
                    <div>
                        <a href="#" class="hover:underline">Tools</a>
                    </div>
                    <div>
                        <a href="#" class="hover:underline">Skills</a>
                    </div>
                </div>
            </div>
            <div>
                <p>
                    &copy; 2024 Anthony Levesque
                </p>
            </div>
        </div>
    </div>
</div>
