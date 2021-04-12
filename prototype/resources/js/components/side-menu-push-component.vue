<template>
    <div>
        <!-- <div class="back-shadow" @click="toggle"></div> -->
        <section class="mobile-push-menu " :class="{'mobile-push-menu__show': isOpen}" @click="toggle">
            <ul class="flex flex-col justify-between space-y-6">
                <li class="rounded-full flex flex-col items-center space-x-1 mt-6">
                    <span class="text-lg text-gray-400 text-center mb-3.5">Welcome</span>
                    <div class="relative">
                        <div class="edit-pencil">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <img class="w-24 h-24 border-2 border-blue-500 object-cover rounded-full" src="img/profile-pic.jpg" alt="">
                    </div>
                    <span class="text-sm text-gray-600 text-center mt-3">John <span class="font-bold ">Doe</span></span>

                </li>
                <li><a href="#" class="text-md font-nunito font-bold text-gray-400 hover:text-blue-500 active:text-blue-500">About us</a></li>
                <li><a href="#" class="text-md font-nunito font-bold text-gray-400 hover:text-blue-500">Products</a></li>
                <li><a href="#" class="text-md font-nunito font-bold text-gray-400 hover:text-blue-500">Our History</a></li>
                <li><a href="#" class="text-md font-nunito font-bold text-gray-400 hover:text-blue-500">Faq</a></li>
                <li><a href="#" class="text-md font-nunito font-bold text-gray-400 hover:text-blue-500 mr-2">Announcements</a></li>
                <li><a href="#" class="text-md font-nunito font-bold text-gray-400">Login</a></li>
                <li><a href="#" class="text-md font-nunito font-bold  text-blue-500 rounded">Register</a></li>
            </ul>
            <div class="mx-auto">
                <a href="#" class="flex items-center font-bold text-gray-500">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-current text-blue-500" viewBox="0 0 24 24" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                    </span>
                    <span class="ml-1 font-nunito font-extrabold text-gray-800">CCCU </span>
                    <span class="ml-2 text-xs font-nunito font-extrabold text-gray-400">©2021</span>
                </a>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    data() {
        return {
            isOpen: true
        }
    },
    methods: {
        toggle: function(){
            this.$emit('side-menu-event');
            return this.isOpen = !this.isOpen;
        }

    }
}
</script>
