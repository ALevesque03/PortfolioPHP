<nav class="flex justify-between items-center w-full h-16 border-b-2 border-solid bg-white border-neutral-500 pb-2 pt-2 text-black mb-10 text-lg">
    <div class="flex ml-10">
        <!-- <%= link_to home_index_path, class: "mr-5 font-rubik lg:text-2xl sm:text-lg text-base hover:scale-105 duration-100" do %> -->
        <a href="/" class="mr-5 font-rubik lg:text-2xl sm:text-lg text-base hover:scale-105 duration-100">
            Anthony Levesque
        </a>
        <!-- <% end %> -->
        <!-- <%= link_to home_index_path, class: "inline w-6" do %> -->
        <img class="h-6 mr-10 hover:scale-125 duration-100" style="clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/AnthonyImage.jpg">
            <!-- <%= image_tag("AnthonyImage.jpg", class: "h-6 mr-10 hover:scale-125 duration-100", style: "clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);") %>
        <% end %> -->
    </div>
    <div class="mr-20 flex gap-5 lg:text-base sm:text-sm text-xs">
        <a href="/" class="hover:scale-125 duration-100">About</a>
        <a href="#" class="hover:scale-125 duration-100">Projects</a>
        <a href="#" class="hover:scale-125 duration-100">Skills</a>
        <a href="/views/home/contact.php" class="hover:scale-125 duration-100">Contact</a>
        
        <!-- <% if user_signed_in? %>
            <%= link_to 'Sign out', destroy_user_session_path, class: "hover:scale-125 duration-100", data: { turbo_method: :delete } %>
        <% elsif %>
            <%= link_to 'Sign In', new_user_session_path, class: "hover:scale-125 duration-100" %>
        <% end %> -->
    </div>
</nav>