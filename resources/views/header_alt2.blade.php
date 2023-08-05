<div id="errorBoxM" style="position: absolute; bottom: 20; right: 0; background-color:aliceblue;"></div>

<header class=" fixed top-0 left-0 right-0 z-50 flex flex-col lg:flex" x-data="{ openSearch: false }">
    <div class="flex min-h-[3.5rem] items-center justify-between gap-2 px-4 duration-300 lg:h-16 lg:gap-0 lg:transition-all max-lg:h-full w-full" :class="{&#39;max-lg:items-start&#39;: openSearch}">
        <div class="flex flex-1 items-center gap-3 sm:gap-4 lg:gap-8 max-lg:!gap-y-0" :class="{&#39;max-lg:h-full max-lg:flex-wrap max-sm:max-w-[80%]&#39;: openSearch}">
            <a href="{{ url('/') }}/" class="flex flex-1 items-center lg:flex-none order-0 sm:min-w-[90px]">
                <img src="{{ url('/') }}/assets/logo.svg">
            </a>
                            <div class="max-navbar:hidden max-w-xl flex-1 items-center py-2 flex order-0" :class="{ &#39;max-navbar:hidden&#39;: !openSearch, &#39;max-navbar:basis-full max-navbar:order-3 max-sm:max-w-[calc(100vw-32px)]&#39;: openSearch }">
                    <form x-data="initFormSearch()" id="search" action="{{ url('/') }}/search/" class="bg-gray-150 h-9 relative flex flex-1 rounded max-w-full">

    
    <button type="submit"></button>
    <div class="flex justify-center">
        <div x-on:keydown.escape.prevent.stop="close($refs.button)" x-on:focusin.window="! $refs.panel.contains($event.target) &amp;&amp; close()" x-id="[&#39;dropdown-button&#39;]" class="relative">
            <!-- Button -->
            <button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id(&#39;dropdown-button&#39;)" type="button" class="bg-gray-200 border-gray-300 flex h-full items-center gap-2 whitespace-nowrap rounded-tl rounded-bl border-r pl-3 pr-2 font-bold text-gray-900" aria-expanded="false" aria-controls="dropdown-button-1">
                <span :class="`hidden`" class="hidden">
                    All videos                </span>
                <span x-text="categoryText">All videos</span>
                <svg class="fill-current h-4 w-4 rotate-90 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>            </button>

            <!-- Panel -->
            <div x-ref="panel" x-show="open" x-transition.origin.top.left="" :id="$id(&#39;dropdown-button&#39;)" style="display: none;" class="absolute left-0 z-20 mt-2 rounded-md bg-white p-2 shadow-md" id="dropdown-button-1">
                <button x-on:click.prevent="setCategory(&#39;video&#39;, &#39;All Videos&#39;)" :class="category === &#39;videos&#39; ? &#39;font-bold bg-blue-400 text-white&#39; : &#39;text-gray-800 hover:bg-gray-150&#39;" class="flex w-full items-center gap-2 whitespace-nowrap rounded px-4 py-2 text-left text-gray-800 hover:bg-gray-150">
                    All videos                    <svg x-show="category === &#39;video&#39;" class="fill-current ml-auto h-3 w-3" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.89321 13.6583C4.64475 13.6583 4.39628 13.5635 4.20669 13.3739L0.284359 9.45158C-0.0947864 9.07244 -0.0947864 8.45768 0.284359 8.07857C0.663544 7.69939 1.27822 7.69939 1.65737 8.07857L4.89384 11.3151L14.3433 1.88374C14.7227 1.50494 15.3375 1.50549 15.7163 1.88502C16.0951 2.26452 16.0945 2.87927 15.715 3.25803L5.57908 13.3745C5.38956 13.5637 5.14133 13.6583 4.89321 13.6583Z"></path>
</svg>                </button>
                <button x-on:click.prevent="setCategory(&#39;footage&#39;, &#39;Footage&#39;)" :class="category === &#39;footage&#39; ? &#39;font-bold bg-blue-400 text-white&#39; : &#39;text-gray-800 hover:bg-gray-150&#39;" class="flex w-full items-center gap-2 whitespace-nowrap rounded px-4 py-2 text-left text-gray-800 hover:bg-gray-150">
                    Footage                    <svg x-show="category === &#39;footage&#39;" class="fill-current ml-auto h-3 w-3" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.89321 13.6583C4.64475 13.6583 4.39628 13.5635 4.20669 13.3739L0.284359 9.45158C-0.0947864 9.07244 -0.0947864 8.45768 0.284359 8.07857C0.663544 7.69939 1.27822 7.69939 1.65737 8.07857L4.89384 11.3151L14.3433 1.88374C14.7227 1.50494 15.3375 1.50549 15.7163 1.88502C16.0951 2.26452 16.0945 2.87927 15.715 3.25803L5.57908 13.3745C5.38956 13.5637 5.14133 13.6583 4.89321 13.6583Z"></path>
</svg>                </button>
                <button x-on:click.prevent="setCategory(&#39;motion-graphics&#39;, &#39;Motion Graphics&#39;)" :class="category === &#39;motion-graphics&#39; ? &#39;font-bold bg-blue-400 text-white&#39; : &#39;text-gray-800 hover:bg-gray-150&#39;" class="flex w-full items-center gap-2 whitespace-nowrap rounded px-4 py-2 text-left text-gray-800 hover:bg-gray-150">
                    Motion graphics                    <svg x-show="category === &#39;motion-graphics&#39;" class="fill-current ml-auto h-3 w-3" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.89321 13.6583C4.64475 13.6583 4.39628 13.5635 4.20669 13.3739L0.284359 9.45158C-0.0947864 9.07244 -0.0947864 8.45768 0.284359 8.07857C0.663544 7.69939 1.27822 7.69939 1.65737 8.07857L4.89384 11.3151L14.3433 1.88374C14.7227 1.50494 15.3375 1.50549 15.7163 1.88502C16.0951 2.26452 16.0945 2.87927 15.715 3.25803L5.57908 13.3745C5.38956 13.5637 5.14133 13.6583 4.89321 13.6583Z"></path>
</svg>                </button>
                <button x-on:click.prevent="setCategory(&#39;music&#39;, &#39;Music&#39;)" :class="category === &#39;music&#39; ? &#39;font-bold bg-blue-400 text-white&#39; : &#39;text-gray-800 hover:bg-gray-150&#39;" class="flex w-full items-center gap-2 whitespace-nowrap rounded px-4 py-2 text-left text-gray-800 hover:bg-gray-150">
                    Music                    <svg x-show="category === &#39;music&#39;" class="fill-current ml-auto h-3 w-3" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.89321 13.6583C4.64475 13.6583 4.39628 13.5635 4.20669 13.3739L0.284359 9.45158C-0.0947864 9.07244 -0.0947864 8.45768 0.284359 8.07857C0.663544 7.69939 1.27822 7.69939 1.65737 8.07857L4.89384 11.3151L14.3433 1.88374C14.7227 1.50494 15.3375 1.50549 15.7163 1.88502C16.0951 2.26452 16.0945 2.87927 15.715 3.25803L5.57908 13.3745C5.38956 13.5637 5.14133 13.6583 4.89321 13.6583Z"></path>
</svg>                </button>
                <button x-on:click.prevent="setCategory(&#39;sound-effects&#39;, &#39;Sound Effects&#39;)" :class="category === &#39;sound-effects&#39; ? &#39;font-bold bg-blue-400 text-white&#39; : &#39;text-gray-800 hover:bg-gray-150&#39;" class="flex w-full items-center gap-2 whitespace-nowrap rounded px-4 py-2 text-left text-gray-800 hover:bg-gray-150">
                    Sound effects                    <svg x-show="category === &#39;sound-effects&#39;" class="fill-current ml-auto h-3 w-3" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.89321 13.6583C4.64475 13.6583 4.39628 13.5635 4.20669 13.3739L0.284359 9.45158C-0.0947864 9.07244 -0.0947864 8.45768 0.284359 8.07857C0.663544 7.69939 1.27822 7.69939 1.65737 8.07857L4.89384 11.3151L14.3433 1.88374C14.7227 1.50494 15.3375 1.50549 15.7163 1.88502C16.0951 2.26452 16.0945 2.87927 15.715 3.25803L5.57908 13.3745C5.38956 13.5637 5.14133 13.6583 4.89321 13.6583Z"></path>
</svg>                </button>
            </div>
        </div>
    </div>
    <input id="searchInput" type="search" class="h-full min-w-0 flex-1 appearance-none rounded-tr rounded-br bg-transparent pl-4 pr-10 text-gray-800 placeholder-gray-600 hover:bg-white focus:bg-white focus:outline-none" placeholder="Search..." name="q" value="" autocomplete="off">
    <input type="hidden" name="mode" :value="category" value="video">

    <button type="submit" class="w-9 h-9 absolute top-0 right-0 flex items-center justify-center rounded text-gray-900">
        <svg class="fill-current h-4 w-4" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.7173 16.4393L12.9552 11.6773C13.9077 10.4527 14.4759 8.91502 14.4759 7.24698C14.4759 3.26096 11.233 0.0180664 7.24698 0.0180664C3.26096 0.0180664 0.0180664 3.26096 0.0180664 7.24698C0.0180664 11.233 3.26096 14.4759 7.24698 14.4759C8.91502 14.4759 10.4527 13.9077 11.6773 12.9552L16.4393 17.7172C16.6158 17.8937 16.8471 17.9819 17.0783 17.9819C17.3096 17.9819 17.5408 17.8937 17.7173 17.7173C18.0701 17.3644 18.0701 16.7922 17.7173 16.4393ZM1.8253 7.24698C1.8253 4.25746 4.25746 1.8253 7.24698 1.8253C10.2365 1.8253 12.6687 4.25746 12.6687 7.24698C12.6687 10.2365 10.2365 12.6687 7.24698 12.6687C4.25746 12.6687 1.8253 10.2365 1.8253 7.24698Z"></path>
</svg>    </button>
</form>
<script>
    function initFormSearch() {
        let firstCategory = "video";
        let firstCategoryName = firstCategory.split('-').map(w => w.charAt(0).toUpperCase() + w.slice(1)).join(' ');
        return {
            open: false,
            category: firstCategory,
            categoryText: `${(firstCategory === "video" ? "All videos" : firstCategoryName)}`,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.$refs.button.focus()

                this.open = true
            },
            setCategory(category, text) {
                this.category = category
                this.categoryText = text
                this.close()
            },
            close(focusAfter) {
                if (!this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            },
            validateSearch(e) {
                const searchValueLength = document.querySelector('#searchInput').value?.trim()?.length ?? 0;
                if (searchValueLength === 0) {
                    e.preventDefault();
                    document.querySelector('#searchInput').value = '';
                    toggleSearchInputPlaceholder();
                    return false;
                }
            }
        }
    }

    function toggleSearchInputPlaceholder() {
        document.querySelector("#searchInput").placeholder = 'Enter a search term';
        setTimeout(() => {
            document.querySelector("#searchInput").placeholder = 'Search...';
        }, 3000)
    }

        document.getElementById('search').addEventListener('submit', function(e) {
        e.preventDefault();

        const searchValueLength = document.querySelector('#searchInput').value?.trim()?.length ?? 0;
        if (searchValueLength === 0) {
            document.querySelector('#searchInput').value = '';
            toggleSearchInputPlaceholder();
            return false;
        }

        let oldTimestamp = localStorage.getItem('istock_redirected');
        let difference = 86400000; //2629743.83;
        let currentTimestamp = Date.now();
        let timeout = 1000;

        if (oldTimestamp != null) {
            this.submit();
            return;
        }

        if ((oldTimestamp == null || currentTimestamp - oldTimestamp > difference) ) {

            const istockRedirectBaseUrl = 'https://istockphoto.6q33.net/c/51471/1020584/4205';

            let query = this.querySelector('input[name="q"]').value.replace(/(\r \t \n)/gm, '').trim();
            query = query.replace(/(\s+)/gm, ' ');
            query = query.replace(/%20/g, "+");

            if(this.querySelector('input[name="mode"]').value == 'motion-graphics') {
                query = 'animated ' + query;
            }

            let url = new URL(istockRedirectBaseUrl);
            url.searchParams.set('adplacement', 'red_indirect_all');
            url.searchParams.set('sharedid', query);
            url.href += '&u=https%3A%2F%2Fwww.istockphoto.com%2Fsearch%2F2%2Ffilm%3Fphrase%3D' + query;

            if(redirectIstock(url.href, currentTimestamp)) {
                this.submit();
            }
        }

    });

    function redirectIstock(url, currentTimestamp) {
        const link = document.createElement('a');
        link.href = url;
        link.setAttribute('target', '_blank');

        link.style.display = 'none';
        document.body.appendChild(link);
        link.click();
        link.remove();
        try {
            localStorage.setItem('istock_redirected', currentTimestamp);
            
            //Trigger Google Analytics event for istock redirect
            window.dataLayer.push({
                event: 'istockRedirectEvent',
                eventCategory: 'Istock Redirect',
                eventAction: 'Triggered redirect on search',
                eventLabel: 'url: ' + "{{ url('/') }}/my-favorites/"
            });

        } catch (error) {
            console.log(error);
        }
        return true;
    }
    

</script>
                </div>
                <button x-on:click="openSearch = ! openSearch" class="max-sm:ml-0 ml-auto h-6 border-r border-white/20 px-4 text-white max-navbar:block hidden  order-0">
                    <svg class="fill-current h-4 w-4" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.7173 16.4393L12.9552 11.6773C13.9077 10.4527 14.4759 8.91502 14.4759 7.24698C14.4759 3.26096 11.233 0.0180664 7.24698 0.0180664C3.26096 0.0180664 0.0180664 3.26096 0.0180664 7.24698C0.0180664 11.233 3.26096 14.4759 7.24698 14.4759C8.91502 14.4759 10.4527 13.9077 11.6773 12.9552L16.4393 17.7172C16.6158 17.8937 16.8471 17.9819 17.0783 17.9819C17.3096 17.9819 17.5408 17.8937 17.7173 17.7173C18.0701 17.3644 18.0701 16.7922 17.7173 16.4393ZM1.8253 7.24698C1.8253 4.25746 4.25746 1.8253 7.24698 1.8253C10.2365 1.8253 12.6687 4.25746 12.6687 7.24698C12.6687 10.2365 10.2365 12.6687 7.24698 12.6687C4.25746 12.6687 1.8253 10.2365 1.8253 7.24698Z"></path>
</svg>                </button>
<div x-data="{ openMenu: false }" class="order-1 max-sm:ml-0 ml-auto flex items-center lg:order-2 lg:ml-0 lg:pr-4">
    <button x-on:click="openMenu = true" class="ml-auto flex items-center justify-center text-white focus:outline-none istock-six:hidden">
        Menu        <svg class="fill-current ml-2 h-4 w-4 rotate-90 opacity-50 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>    </button>
    <div class="relative">
        <nav class="hidden flex-row istock-six:flex">
    <span class="group relative">
        <a href="{{ url('/') }}/stock-video-footage" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    Videos            <svg alt="caret icon" class="fill-current ml-1 h-5 w-5 rotate-90 fill-current opacity-60 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>
</a>
        <div class="absolute top-full left-0 hidden flex-col gap-1 rounded-lg bg-white p-2 shadow-lg group-hover:flex">
            <a href="{{ url('/') }}/stock-video-footage" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg"><span class="font-bold text-gray-800">All videos</span></a>
            <a href="{{ url('/') }}/free-stock-footage" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Footage</a>
            <a href="{{ url('/') }}/free-motion-graphics" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Motion graphics</a>
        </div>
    </span>
    <span class="group relative">
        <a href="{{ url('/') }}/Template" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    Templates            <svg alt="caret icon" class="fill-current ml-1 h-5 w-5 rotate-90 fill-current opacity-60 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>
</a>
        <div class="absolute top-full left-0 hidden flex-col gap-1 rounded-lg bg-white p-2 shadow-lg group-hover:flex">
            <a href="{{ url('/') }}/Template" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg"><span class="font-bold text-gray-800">All templates</span></a>
            <a href="{{ url('/') }}/after-effects-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">After Effects templates</a>
            <a href="{{ url('/') }}/premiere-pro-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Premiere Pro templates</a>
            <a href="{{ url('/') }}/davinci-resolve-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">DaVinci Resolve templates</a>
            <a href="{{ url('/') }}/final-cut-pro-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Final Cut Pro templates</a>
            <a href="{{ url('/') }}/motion-graphics-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Motion Graphics templates</a>
        </div>
    </span>
    <span class="group relative">
        <a href="{{ url('/') }}/Audio" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    Audio            <svg alt="caret icon" class="fill-current ml-1 h-5 w-5 rotate-90 fill-current opacity-60 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>
</a>
        <div class="absolute top-full left-0 hidden flex-col gap-1 rounded-lg bg-white p-2 shadow-lg group-hover:flex">
            <a href="{{ url('/') }}/Audio" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg"><span class="font-bold text-gray-800">Music</span></a>
            <a href="{{ url('/') }}/royalty-free-sound-effects" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg"><span class="font-bold text-gray-800">Sound effects</span></a>
        </div>
    </span>
    <a href="{{ url('/') }}/collections" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    Collections
</a>
    <a href="{{ url('/') }}/Help" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    Help
</a>
</nav>
    </div>
    <div :class="{ hidden: !openMenu }" class="fixed top-0 left-0 right-0 z-40 flex h-screen flex-col bg-white istock-six:hidden hidden">
        <nav class="flex flex-col">
    <div class="mb-2 flex items-center justify-between border-b border-gray-200 py-2 pl-6 pr-4">
        <p class="text-lg font-bold text-gray-900">Menu</p>
        <button x-on:click="openMenu = false" class="p-2 focus:outline-none">
            <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512">
    <path d="M242.355 397l127.987-127.987c9.763-9.763 9.763-25.592 0-35.355-9.764-9.763-25.592-9.763-35.355 0L207 361.644 79.013 233.658c-9.764-9.763-25.592-9.763-35.355 0s-9.763 25.592 0 35.355l127.986 127.986L43.658 524.986c-9.763 9.763-9.763 25.592 0 35.355 9.764 9.763 25.592 9.763 35.355 0l127.986-127.986 127.987 127.987c9.764 9.763 25.592 9.763 35.355 0s9.763-25.592 0-35.355L242.355 397z">
    </path>
</svg>        </button>
    </div>
    <div class="relative px-4 py-1.5" x-data="{ openVideos: false }">
        <div class="flex items-center rounded-lg" :class="{ &#39;bg-gray-150&#39;: openVideos }">
            <a href="{{ url('/') }}/stock-video-footage" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 xl:hidden" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path d="M9.48816 3.81992C9.3405 2.98594 8.61316 2.35156 7.73816 2.35156H2.05066C1.07175 2.35156 0.273315 3.15 0.273315 4.12891V9.87109C0.273315 10.85 1.07175 11.6484 2.05066 11.6484H7.73816C8.61316 11.6484 9.3405 11.0141 9.48816 10.1801V3.81992Z"></path><path d="M13.3849 3.89087C13.1743 3.76782 12.9118 3.76782 12.7013 3.89087L10.5822 5.11587V8.9057L12.7013 10.128C12.8079 10.1881 12.9255 10.2182 13.0431 10.2182C13.1607 10.2182 13.2782 10.1881 13.3849 10.128C13.5954 10.0049 13.7267 9.7807 13.7267 9.53461V4.48423C13.7267 4.23813 13.5954 4.01392 13.3849 3.89087Z"></path></svg>                Videos
</a>
            <button x-on:click="openVideos = ! openVideos" class="border-l border-gray-300 py-1 pl-4 pr-2">
                <svg class="fill-current h-5 w-5 rotate-90 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>            </button>
        </div>
        <div :class="{ hidden: !openVideos }" class="flex flex-col pl-6 hidden">
            <a href="{{ url('/') }}/stock-video-footage" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">All videos</a>
            <a href="{{ url('/') }}/free-stock-footage" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Footage</a>
            <a href="{{ url('/') }}/free-motion-graphics" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Motion graphics</a>
        </div>
    </div>
    <div class="relative px-4 py-1.5" x-data="{ openTemplates: false }">
        <div class="flex items-center rounded-lg" :class="{ &#39;bg-gray-150&#39;: openTemplates }">
            <a href="{{ url('/') }}/Template" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 xl:hidden" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><path d="M16.2422 4.70039V4.69688C16.2422 4.6793 16.2387 4.66172 16.2387 4.64414C16.2387 4.64063 16.2387 4.63359 16.2352 4.63008C16.2316 4.6125 16.2281 4.59141 16.2246 4.57383C16.2211 4.55625 16.2176 4.53516 16.2105 4.51758C16.2105 4.51406 16.207 4.50703 16.207 4.50352C16.2035 4.48594 16.1965 4.46836 16.1895 4.4543V4.45078C16.1824 4.4332 16.1754 4.41562 16.1684 4.39805C16.1648 4.39453 16.1648 4.3875 16.1613 4.38398C16.1543 4.36992 16.1473 4.35234 16.1402 4.33828C16.1402 4.33477 16.1367 4.33477 16.1367 4.33125C16.1297 4.31367 16.1191 4.29961 16.1086 4.28203C16.1051 4.27852 16.1016 4.27148 16.1016 4.26797C16.091 4.25391 16.084 4.23984 16.0734 4.22578L16.0699 4.22227C16.0594 4.2082 16.0453 4.19063 16.0348 4.17656C16.0313 4.17305 16.0277 4.16953 16.0242 4.16602C16.0102 4.15195 15.9996 4.13789 15.9855 4.12383L12.4699 0.608203C12.4559 0.594141 12.4418 0.580078 12.4277 0.569531C12.4242 0.566016 12.4207 0.5625 12.4172 0.558984C12.4031 0.548437 12.3891 0.534375 12.3715 0.523828C12.368 0.523828 12.368 0.520313 12.3645 0.520313C12.3504 0.509766 12.3363 0.499219 12.3223 0.492188C12.3187 0.488672 12.3117 0.485156 12.3082 0.481641C12.2941 0.471094 12.2766 0.464062 12.2625 0.453516C12.259 0.453516 12.2555 0.45 12.2555 0.45C12.2414 0.442969 12.2273 0.435937 12.2133 0.428906C12.2098 0.425391 12.2027 0.425391 12.1992 0.421875C12.1816 0.414844 12.1641 0.407812 12.15 0.400781C12.1465 0.400781 12.1465 0.400781 12.143 0.397266C12.1289 0.390234 12.1113 0.386719 12.0938 0.383203C12.0902 0.383203 12.0832 0.379688 12.0797 0.379688C12.0621 0.376172 12.0445 0.369141 12.027 0.365625H12.0234C12.0059 0.362109 11.9883 0.358594 11.9707 0.358594C11.9637 0.358594 11.9602 0.358594 11.9531 0.355078C11.9355 0.351563 11.918 0.351562 11.9039 0.351562C11.9004 0.351562 11.9004 0.351562 11.8969 0.351562C11.8828 0.351562 11.8688 0.351562 11.8547 0.351562H4.04297C2.78438 0.351562 1.75781 1.37813 1.75781 2.63672V15.3633C1.75781 16.6219 2.78438 17.6484 4.04297 17.6484H13.957C15.2156 17.6484 16.2422 16.6219 16.2422 15.3633V4.74609C16.2422 4.73203 16.2422 4.71797 16.2422 4.70039ZM13.957 15.8906H4.04297C3.75117 15.8906 3.51562 15.6551 3.51562 15.3633V2.63672C3.51562 2.34492 3.75117 2.10938 4.04297 2.10938H10.9688V4.74609C10.9688 5.23125 11.3625 5.625 11.8477 5.625H14.4844V15.3633C14.4844 15.6551 14.2488 15.8906 13.957 15.8906Z"></path><path d="M11.8477 7.38281H6.15234C5.66719 7.38281 5.27344 7.77656 5.27344 8.26172V13.2539C5.27344 13.7391 5.66719 14.1328 6.15234 14.1328H11.8477C12.3328 14.1328 12.7266 13.7391 12.7266 13.2539V8.26172C12.7266 7.77656 12.3328 7.38281 11.8477 7.38281ZM10.9688 12.375H7.03125V9.14062H10.9688V12.375Z"></path><path d="M6.1875 5.625H8.33203C8.81719 5.625 9.21094 5.23125 9.21094 4.74609C9.21094 4.26094 8.81719 3.86719 8.33203 3.86719H6.1875C5.70234 3.86719 5.30859 4.26094 5.30859 4.74609C5.30859 5.23125 5.70234 5.625 6.1875 5.625Z"></path></svg>                Templates
</a>
            <button x-on:click="openTemplates = ! openTemplates" class="border-l border-gray-300 py-1 pl-4 pr-2">
                <svg class="fill-current h-5 w-5 rotate-90 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>            </button>
        </div>
        <div :class="{ hidden: !openTemplates }" class="flex flex-col pl-6 hidden">
            <a href="{{ url('/') }}/Template" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">All templates</a>
            <a href="{{ url('/') }}/after-effects-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">After Effects templates</a>
            <a href="{{ url('/') }}/premiere-pro-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Premiere Pro templates</a>
            <a href="{{ url('/') }}/davinci-resolve-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">DaVinci Resolve templates</a>
            <a href="{{ url('/') }}/final-cut-pro-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Final Cut Pro templates</a>
            <a href="{{ url('/') }}/motion-graphics-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Motion Graphics templates</a>
        </div>
    </div>
    <div class="px-4 py-1.5">
        <a href="{{ url('/') }}/Audio" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 p-px xl:hidden" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.578 0.752131C6.32256 0.646311 6.02853 0.704826 5.83302 0.900307L3.29886 3.43447H1.77734C0.797316 3.43447 0 4.23179 0 5.21181V8.82119C0 9.80122 0.797316 10.5985 1.77734 10.5985H3.29889L5.83305 13.1327C6.02856 13.3282 6.32256 13.3867 6.57803 13.2809C6.83348 13.1751 7.00003 12.9258 7.00003 12.6493V1.38369C7 1.10722 6.83345 0.857951 6.578 0.752131ZM5.63281 10.9991L4.06541 9.43171C3.93723 9.30352 3.76335 9.2315 3.58203 9.2315H1.77734C1.55118 9.2315 1.36719 9.04751 1.36719 8.82135V5.21197C1.36719 4.98581 1.55118 4.80181 1.77734 4.80181H3.58203C3.76332 4.80181 3.9372 4.72979 4.06541 4.6016L5.63281 3.03418V10.9991ZM8.77734 12.2392C8.39981 12.2392 8.09375 11.9331 8.09375 11.5556C8.09375 11.1781 8.39981 10.872 8.77734 10.872C10.9033 10.872 12.6328 9.14246 12.6328 7.01654C12.6328 4.89062 10.9033 3.16107 8.77734 3.16107C8.39981 3.16107 8.09375 2.85501 8.09375 2.47748C8.09375 2.09994 8.39981 1.79388 8.77734 1.79388C11.6571 1.79388 14 4.13675 14 7.01654C14 9.89633 11.6571 12.2392 8.77734 12.2392ZM8.77734 9.50482C8.39981 9.50482 8.09375 9.19876 8.09375 8.82123C8.09375 8.44369 8.39981 8.13763 8.77734 8.13763C9.3955 8.13763 9.89844 7.6347 9.89844 7.01654C9.89844 6.39838 9.3955 5.89545 8.77734 5.89545C8.39981 5.89545 8.09375 5.58939 8.09375 5.21185C8.09375 4.83432 8.39981 4.52826 8.77734 4.52826C10.1494 4.52826 11.2656 5.64448 11.2656 7.01654C11.2656 8.38859 10.1494 9.50482 8.77734 9.50482Z"></path></svg>            Music
</a>
    </div>
    <div class="px-4 py-1.5">
        <a href="{{ url('/') }}/royalty-free-sound-effects" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 p-px xl:hidden" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M20.1202143,11.0688896 C19.9916176,10.7181707 19.6928864,10.4857143 19.3389286,10.4857143 C18.9939471,10.4857143 18.67665,10.7077729 18.5470666,11.0955411 L17.4969177,14.2483969 L15.7319757,5.07275157 C15.6432177,4.60987347 15.2986832,4.33333333 14.9096429,4.33333333 C14.4924205,4.33333333 14.1390469,4.64553063 14.0726633,5.12578744 L12.5870974,15.8472742 L11.2070146,9.40281819 C11.1105702,8.95178445 10.7677335,8.68452381 10.385,8.68452381 C10.0206587,8.68452381 9.69381818,8.92717816 9.57837727,9.34445402 L8.29182875,14.0205753 L7.50795763,11.9611838 C7.37752625,11.6174539 7.0792676,11.3904762 6.72928571,11.3904762 C6.44411951,11.3904762 6.18906438,11.544319 6.03295091,11.7978366 L4.74225033,13.8571429 L2.53571429,13.8571429 C2.04761671,13.8571429 1.66666667,14.2804207 1.66666667,14.7857143 C1.66666667,15.2910079 2.04761671,15.7142857 2.53571429,15.7142857 L5.19714286,15.7142857 C5.48070356,15.7142857 5.74026583,15.5619221 5.89482186,15.310053 L6.55249238,14.267153 L7.64351083,17.1305876 C7.77508201,17.476633 8.06766243,17.7011905 8.41892857,17.7011905 C8.80310547,17.7011905 9.12006385,17.430115 9.22775274,17.0398578 L10.2845491,13.1979296 L11.9426182,20.9459442 C12.0406837,21.3994208 12.3749338,21.6666667 12.7614286,21.6666667 C13.1789643,21.6666667 13.5321397,21.3540822 13.5984292,20.8728697 L15.0412899,10.4597015 L16.4530211,17.8010416 C16.5393078,18.2506582 16.8861584,18.5416667 17.2807143,18.5416667 C17.6483058,18.5416667 17.9453664,18.3010721 18.0692054,17.9323069 L19.3748645,14.0162989 L20.5751519,17.2989923 C20.7037056,17.6495937 21.0035455,17.8821429 21.3575,17.8821429 C21.6402762,17.8821429 21.8952471,17.7296379 22.0502996,17.4788739 L23.210978,15.697619 L25.4728571,15.697619 C25.956669,15.697619 26.3333333,15.2791031 26.3333333,14.7785714 C26.3333333,14.2779477 25.9567247,13.8571429 25.4728571,13.8571429 L22.7707143,13.8571429 C22.4889028,13.8571429 22.2305569,14.0121285 22.0765685,14.2620473 L21.5625855,15.0146298 L20.1202143,11.0688896 Z"></path></svg>            Sound effects
</a>
    </div>
    <div class="px-4 py-1.5">
        <a href="{{ url('/') }}/collections/" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 p-px xl:hidden" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none" viewBox="0 0 24 24"><path d="M20 2H8c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zM8 16V4h12l.002 12H8z"></path><path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8zm11-2h-2v3h-3v2h3v3h2v-3h3V9h-3z"></path></svg>            Collections
</a>
    </div>
    <div class="px-4 py-1.5">
        <a href="{{ url('/') }}/Help" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 xl:hidden" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.05023 11.9498C3.37236 13.2719 5.13023 14 7 14C8.86977 14 10.6276 13.2719 11.9498 11.9498C13.2719 10.6276 14 8.86977 14 7C14 5.13023 13.2719 3.37239 11.9498 2.05023C10.6276 0.728137 8.86977 0 7 0C5.13023 0 3.37236 0.728137 2.05023 2.05023C0.728137 3.37239 0 5.13023 0 7C0 8.86977 0.728137 10.6276 2.05023 11.9498ZM1.36719 7C1.36719 3.89405 3.89405 1.36719 7 1.36719C10.1059 1.36719 12.6328 3.89405 12.6328 7C12.6328 10.1059 10.1059 12.6328 7 12.6328C3.89405 12.6328 1.36719 10.1059 1.36719 7ZM7 9.07812C6.62246 9.07812 6.31641 8.77207 6.31641 8.39453V7.51953C6.31641 7.142 6.62246 6.83594 7 6.83594C7.75387 6.83594 8.36719 6.22262 8.36719 5.46875C8.36719 4.71488 7.75387 4.10156 7 4.10156C6.24613 4.10156 5.63281 4.71488 5.63281 5.46875C5.63281 5.84629 5.32675 6.15234 4.94922 6.15234C4.57168 6.15234 4.26562 5.84629 4.26562 5.46875C4.26562 3.96102 5.49224 2.73438 7 2.73438C8.50776 2.73438 9.73438 3.96102 9.73438 5.46875C9.73438 6.74054 8.86164 7.81233 7.68359 8.11661V8.39453C7.68359 8.77207 7.37754 9.07812 7 9.07812ZM6.17969 10.4453C6.17969 10.8976 6.54768 11.2656 7 11.2656C7.45232 11.2656 7.82031 10.8976 7.82031 10.4453C7.82031 9.99299 7.45232 9.625 7 9.625C6.54768 9.625 6.17969 9.99299 6.17969 10.4453Z"></path></svg>            Help
</a>
    </div>
</nav>
<div class="flex flex-col gap-2 p-4">
    <a href="{{ url('/') }}/premium" class="flex w-full items-center justify-center rounded-lg bg-blue-400 py-3 font-bold text-white">
        Join Videvo    </a>
    <a href="{{ url('/') }}/Log-in" class="flex w-full items-center justify-center rounded-lg bg-gray-200 py-3 font-bold text-gray-800">
        Log in    </a>
</div>
    </div>
</div>

        </div>
@if(Session::has('logedin'))
        <div class="flex items-center gap-2 order-2" :class="{&#39;max-lg:mt-[13px]&#39;: openSearch}">
                                                <a href="{{ url('/') }}/premium-plans/" class="hidden rounded-lg border-2 border-white/50 py-1 px-2 font-bold text-white hover:border-white sm:block">
                        <svg class="fill-current h-4 w-4 inline-block" viewBox="-120 0 512 512.00115" xmlns="http://www.w3.org/2000/svg"><path d="m270.214844 180.054688c-2.628906-4.816407-7.679688-7.816407-13.167969-7.816407h-54.425781l24.753906-154.871093c1.082031-6.773438-2.570312-13.417969-8.867188-16.136719-6.292968-2.71875-13.640624-.820313-17.828124 4.613281l-197.5625 256.398438c-3.488282 4.527343-4.097657 10.644531-1.578126 15.777343 2.523438 5.128907 7.746094 8.378907 13.460938 8.378907h85.816406l-57.566406 206.574218c-1.992188 7.144532 1.539062 14.675782 8.304688 17.710938 1.988281.890625 4.074218 1.316406 6.136718 1.316406 4.96875 0 9.78125-2.476562 12.621094-6.882812l199.351562-309.761719c2.96875-4.613281 3.179688-10.484375.550782-15.300781zm0 0"></path></svg>                        Upgrade                    </a>
                                <div x-data="{ open: false }" @click.away="open = false" class="group relative ml-2 cursor-pointer text-white">
    <div @click="open = ! open">
        <div class="flex items-center">
                            <button class="h-10 w-10 overflow-hidden rounded-full border-2 border-white/50 hover:border-white" data-cy="avatar">
                                <img src="{{Session::get('profile_img')}}" class="h-full w-full object-cover">
                            </button>
                            <svg class="fill-current ml-2 h-4 w-4 rotate-90 opacity-50 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>                        </div>
    </div>

    <div x-show="open" style="display: none;">
        <div class="fixed top-0 right-0 z-30 flex h-screen w-screen flex-col gap-1 bg-white sm:absolute sm:top-full sm:right-2 sm:mt-1 sm:h-auto sm:w-96 sm:rounded-xl sm:shadow-xl">
                        <button @click="open = ! open" class="absolute top-2 right-2 flex h-8 w-8 items-center justify-center sm:hidden">
                            <svg class="fill-current h-5 w-5 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512">
    <path d="M242.355 397l127.987-127.987c9.763-9.763 9.763-25.592 0-35.355-9.764-9.763-25.592-9.763-35.355 0L207 361.644 79.013 233.658c-9.764-9.763-25.592-9.763-35.355 0s-9.763 25.592 0 35.355l127.986 127.986L43.658 524.986c-9.763 9.763-9.763 25.592 0 35.355 9.764 9.763 25.592 9.763 35.355 0l127.986-127.986 127.987 127.987c9.764 9.763 25.592 9.763 35.355 0s9.763-25.592 0-35.355L242.355 397z">
    </path>
</svg>                        </button>
                        <div class="border-b border-gray-200 px-4 pb-4">
                            <a href="{{ url('/') }}/my-favorites/#" class="mb-1 flex items-center border-b border-gray-200 py-4">
                                <img src="{{Session::get('profile_img')}}" class="mr-4 h-14 w-14 rounded-full object-cover">
                                <span class="flex flex-col items-start text-lg font-bold text-gray-900">
                                    {{Session::get('username')}}
                                    <span class="inline-flex items-center gap-2">
                                        <span class="flex h-5 items-center rounded bg-yellow-600 px-1.5 text-xs uppercase text-white" data-cy="product"> @if(Session::get('prem_status') == 'false') free @else Premium @endif  </span>
                                        <p class="text-xs uppercase text-gray-600" data-cy="frequency"></p>
                                    </span>
                                </span>
                            </a>
                            <div class="-mb-4">
                                                                <a href="{{ url('/') }}/my-favorites/#" class="-mx-4 mt-2 flex items-center bg-gradient-to-br from-pink-500 via-blue-400 to-blue-300 py-4 px-4 text-sm font-bold text-blue-400">
                                    <img src="{{ url('/') }}/assets/icon-present.svg" class="mr-4 h-12 w-12 shrink-0">
                                    @if(Session::get('prem_status') == 'false')
                                    <div>
                                        <p class="whitespace-nowrap text-lg font-bold text-white">
                                            Refer a friend, get a free month!                                        </p>
                                        <p class="flex items-center text-sm text-white">
                                            Plus give your friend 20% OFF                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>                                        </p>
                                    </div>
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 py-2 px-3">
                            @if(Session::get('userrole') == 'admin')
                            <a href="{{ url('/') }}/admindashboard" class="flex items-center rounded-lg px-2 py-2.5 font-bold text-gray-900 hover:bg-gray-150">
                                Admin Dashboard</a>
                                @endif
                            <a href="{{ url('/') }}/userdashboard" class="flex items-center rounded-lg px-2 py-2.5 font-bold text-gray-900 hover:bg-gray-150">
                                User Dashboard</a>
                            <a href="{{ url('/') }}/favorites" class="flex items-center rounded-lg px-2 py-2.5 font-bold text-gray-900 hover:bg-gray-150">
                                <svg class="fill-current mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none"><path d="M5.40956 2.51538C4.45258 1.76408 3.08107 1.83357 2.20944 2.72795C1.25976 3.7024 1.26439 5.28574 2.2182 6.26443L5.74895 9.8873C5.8954 10.0376 6.13284 10.0376 6.27929 9.8873L9.7917 6.28538C10.7392 5.30775 10.7362 3.72885 9.7822 2.74999C8.90375 1.84862 7.52809 1.77191 6.57265 2.52393C6.48883 2.58991 6.40825 2.66226 6.33151 2.74099L5.99605 3.08587L5.65599 2.73693C5.57761 2.65651 5.49525 2.58265 5.40956 2.51538ZM7.04767 3.43893C7.60289 2.86945 8.49943 2.86653 9.06605 3.44793C9.64336 4.04031 9.64309 5.00077 9.07454 5.58846L9.0736 5.58943L6.01425 8.72674L2.93435 5.56648C2.3556 4.97264 2.35777 4.00853 2.92559 3.42589C3.4791 2.85794 4.37486 2.85516 4.93984 3.43488L5.2799 3.78381C5.46824 3.97706 5.72669 4.086 5.99654 4.08587C6.26638 4.08574 6.52472 3.97655 6.71288 3.78312L7.04767 3.43893Z" fill="currentColor"></path></svg>                                My favourites                            </a>
                            <a href="{{ url('/') }}/mycollections" class="flex items-center rounded-lg px-2 py-2.5 font-bold text-gray-900 hover:bg-gray-150">
                                <svg class="fill-current mr-3 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none" viewBox="0 0 24 24"><path d="M20 2H8c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zM8 16V4h12l.002 12H8z"></path><path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8zm11-2h-2v3h-3v2h3v3h2v-3h3V9h-3z"></path></svg>                                My collections                            </a>
                            <a href="{{ url('/') }}/history" class="flex items-center rounded-lg px-2 py-2.5 font-bold text-gray-900 hover:bg-gray-150">
                                <svg class="fill-current mr-3 h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8 12.2188C7.79281 12.2188 7.59409 12.1364 7.44756 11.9899L4.79594 9.33828C4.49084 9.03319 4.49084 8.53853 4.79594 8.23344C5.10103 7.92834 5.59566 7.92834 5.90078 8.23344L7.21875 9.55141V0.78125C7.21875 0.349781 7.56853 0 8 0C8.43147 0 8.78125 0.349781 8.78125 0.78125V9.55141L10.0992 8.23344C10.4043 7.92834 10.899 7.92834 11.2041 8.23344C11.5092 8.53853 11.5092 9.03319 11.2041 9.33828L8.55244 11.9899C8.40591 12.1364 8.20722 12.2188 8 12.2188ZM14.4375 8.78125C14.4375 8.34978 14.7872 8 15.2188 8C15.6503 8 16 8.34978 16 8.78125V12.9688C16 14.4334 14.8084 15.625 13.3438 15.625H2.65625C1.19159 15.625 0 14.4334 0 12.9688V8.78125C0 8.34978 0.349781 8 0.78125 8C1.21272 8 1.5625 8.34978 1.5625 8.78125V12.9688C1.5625 13.5718 2.05316 14.0625 2.65625 14.0625H13.3438C13.9468 14.0625 14.4375 13.5718 14.4375 12.9688V8.78125Z"></path>
</svg>                                Download History                            </a>
                            <a href="{{ url('/') }}/profile" class="flex items-center rounded-lg px-2 py-2.5 font-bold text-gray-900 hover:bg-gray-150">
                                <svg class="fill-current mr-3 h-4 w-4" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path d="M12.7221 7.84744C12.7645 7.56746 12.7859 7.28396 12.7859 7C12.7859 6.71604 12.7645 6.43254 12.7221 6.15256C13.5908 5.63281 13.8318 4.56299 13.3519 3.7368L13.0785 3.2632C12.5924 2.42121 11.5166 2.12732 10.6709 2.60113C10.227 2.24623 9.731 1.9594 9.20368 1.75273C9.1905 0.783945 8.39832 0 7.4265 0H6.87963C5.9078 0 5.11563 0.783945 5.10245 1.75273C4.57512 1.9594 4.07908 2.24623 3.63524 2.60113C2.78958 2.12732 1.71376 2.42121 1.22762 3.2632L0.954181 3.7368C0.474353 4.56299 0.715279 5.63281 1.58399 6.15256C1.54161 6.43254 1.52025 6.71604 1.52025 7C1.52025 7.28396 1.54161 7.56746 1.58399 7.84744C0.751263 8.34312 0.468173 9.42143 0.954181 10.2632L1.22762 10.7368C1.71376 11.5788 2.78958 11.8727 3.63524 11.3989C4.07908 11.7538 4.57512 12.0406 5.10245 12.2473C5.11565 13.2161 5.9078 14 6.87963 14H7.4265C8.39832 14 9.1905 13.2161 9.20368 12.2473C9.731 12.0406 10.227 11.7538 10.6709 11.3989C11.5166 11.8727 12.5924 11.5788 13.0785 10.7368L13.3519 10.2632C13.838 9.42143 13.5549 8.34312 12.7221 7.84744ZM12.1679 9.57961L11.8945 10.0532C11.7814 10.2491 11.53 10.3164 11.3342 10.2033L10.9304 9.97019C10.6663 9.81775 10.3333 9.8586 10.114 10.0702C9.61279 10.5537 8.99651 10.91 8.33176 11.1007C8.03861 11.1848 7.83665 11.4528 7.83665 11.7578V12.2227C7.83665 12.4488 7.65265 12.6328 7.42649 12.6328H6.87961C6.65345 12.6328 6.46946 12.4488 6.46946 12.2227V11.7578C6.46946 11.4528 6.26747 11.1848 5.97435 11.1007C5.30959 10.91 4.69332 10.5537 4.19214 10.0702C3.97278 9.8586 3.63979 9.81775 3.37573 9.97019L2.97189 10.2033C2.77608 10.3164 2.52471 10.249 2.41162 10.0532L2.13818 9.57961C2.02509 9.38375 2.09244 9.1324 2.2883 9.01931L2.69113 8.78672C2.95494 8.63442 3.08616 8.32593 3.01288 8.03023C2.92965 7.69439 2.88743 7.34779 2.88743 6.99997C2.88743 6.65216 2.92965 6.30555 3.01288 5.96974C3.08619 5.67407 2.95499 5.36555 2.69115 5.21325L2.2883 4.98066C2.07737 4.85352 2.04319 4.60059 2.13818 4.42039L2.41162 3.9468C2.52471 3.75093 2.77606 3.68364 2.97189 3.79668L3.37573 4.02981C3.63974 4.1822 3.9727 4.14146 4.19211 3.92979C4.69332 3.4463 5.30959 3.08995 5.97435 2.89929C6.2675 2.8152 6.46946 2.54715 6.46946 2.24219V1.77734C6.46946 1.55118 6.65345 1.36719 6.87961 1.36719H7.42649C7.65265 1.36719 7.83665 1.55118 7.83665 1.77734V2.24219C7.83665 2.54713 8.03863 2.8152 8.33176 2.89929C8.99651 3.08995 9.61279 3.4463 10.114 3.92979C10.3334 4.14146 10.6664 4.1822 10.9304 4.02981L11.3342 3.79668C11.53 3.68364 11.7814 3.75093 11.8945 3.9468L12.1679 4.42039C12.2629 4.60059 12.2287 4.85352 12.0178 4.98066L11.6149 5.21325C11.3511 5.36555 11.2199 5.67407 11.2932 5.96974C11.3765 6.30555 11.4187 6.65219 11.4187 6.99997C11.4187 7.34776 11.3765 7.69439 11.2932 8.03023C11.2199 8.3259 11.3511 8.63439 11.615 8.78672L12.0178 9.01931C12.2137 9.1324 12.281 9.38375 12.1679 9.57961ZM7.15314 9.89844C5.55495 9.89844 4.2547 8.59822 4.2547 7C4.2547 5.40178 5.55495 4.10156 7.15314 4.10156C8.75132 4.10156 10.0516 5.40178 10.0516 7C10.0516 8.59822 8.75135 9.89844 7.15314 9.89844ZM7.15314 5.46875C6.30879 5.46875 5.62189 6.15568 5.62189 7C5.62189 7.84432 6.30879 8.53125 7.15314 8.53125C7.99748 8.53125 8.68439 7.84432 8.68439 7C8.68439 6.15568 7.99748 5.46875 7.15314 5.46875Z"></path></svg>                                Account settings                            </a>
                        </div>
                        <div class="px-3 pb-3">
                            <a href="{{ url('/') }}/users/logout" class="flex items-center justify-center rounded-lg bg-gray-150 px-2 py-3 font-bold text-gray-900 hover:bg-gray-200">
                                Log out                            </a>
                        </div>
                    </div>
    </div>
</div>
                    </div>
                    @else
                    <div class="flex items-center gap-2 order-2" :class="{'max-lg:mt-[13px]': openSearch}">
                            <a href="{{ url('/') }}/premium" class="hidden rounded-lg border-2 border-white/50 py-1 px-3 font-bold text-white hover:border-white sm:block">
                    Join Videvo                </a>
                <a href="{{ url('/') }}/Log-in" class="rounded-lg py-1 px-3 font-bold text-white/75 hover:text-white">
                    Log in                </a>
                    </div>
                    @endif
    </div>

    <div class="flex"></div>
</header>