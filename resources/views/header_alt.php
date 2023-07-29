<header class="header-transparent fixed top-0 left-0 right-0 z-50 flex flex-col lg:flex header-fill" x-data="{ openSearch: false }">
    <div class="flex min-h-[3.5rem] items-center justify-between gap-2 px-4 duration-300 lg:h-16 lg:gap-0 lg:transition-all max-lg:h-full w-full" class="{&#39;max-lg:items-start&#39;: openSearch}">
        <div class="flex flex-1 items-center gap-3 sm:gap-4 lg:gap-8 max-lg:!gap-y-0" class="{&#39;max-lg:h-full max-lg:flex-wrap max-sm:max-w-[80%]&#39;: openSearch}">
            <a href="http://127.0.0.1:8000/" class="flex flex-1 items-center lg:flex-none order-0 sm:min-w-[90px]">
                <img src="./images/logo.svg">
            </a>
<div class="max-navbar:hidden max-w-xl flex-1 items-center py-2 flex order-0" :class="{ &#39;max-navbar:hidden&#39;: !openSearch, &#39;max-navbar:basis-full max-navbar:order-3 max-sm:max-w-[calc(100vw-32px)]&#39;: openSearch }">
<form x-data="initFormSearch()" id="search" action="http://127.0.0.1:8000/search/" class="bg-gray-150 h-9 relative flex flex-1 rounded max-w-full" @submit.prevent.stop="validateSearch">

    
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
            eventLabel: 'url: ' + "http://127.0.0.1:8000/after-effects-templates/company-presentation/1005165/"
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
        <a href="http://127.0.0.1:8000/stock-video-footage" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    Videos            <svg alt="caret icon" class="fill-current ml-1 h-5 w-5 rotate-90 fill-current opacity-60 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>
</a>
        <div class="absolute top-full left-0 hidden flex-col gap-1 rounded-lg bg-white p-2 shadow-lg group-hover:flex">
            <a href="http://127.0.0.1:8000/stock-video-footage" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg"><span class="font-bold text-gray-800">All videos</span></a>
            <a href="http://127.0.0.1:8000/free-stock-footage" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Footage</a>
            <a href="http://127.0.0.1:8000/free-motion-graphics" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Motion graphics</a>
        </div>
    </span>
    <span class="group relative">
        <a href="http://127.0.0.1:8000/Template" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    Templates            <svg alt="caret icon" class="fill-current ml-1 h-5 w-5 rotate-90 fill-current opacity-60 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>
</a>
        <div class="absolute top-full left-0 hidden flex-col gap-1 rounded-lg bg-white p-2 shadow-lg group-hover:flex">
            <a href="http://127.0.0.1:8000/Template" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg font-bold xl:bg-gray-150"><span class="font-bold text-gray-800">All templates</span></a>
            <a href="http://127.0.0.1:8000/after-effects-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">After Effects templates</a>
            <a href="http://127.0.0.1:8000/premiere-pro-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Premiere Pro templates</a>
            <a href="http://127.0.0.1:8000/davinci-resolve-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">DaVinci Resolve templates</a>
            <a href="http://127.0.0.1:8000/final-cut-pro-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Final Cut Pro templates</a>
            <a href="http://127.0.0.1:8000/motion-graphics-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Motion Graphics templates</a>
        </div>
    </span>
    <span class="group relative">
        <a href="http://127.0.0.1:8000/Audio" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    Audio            <svg alt="caret icon" class="fill-current ml-1 h-5 w-5 rotate-90 fill-current opacity-60 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>
</a>
        <div class="absolute top-full left-0 hidden flex-col gap-1 rounded-lg bg-white p-2 shadow-lg group-hover:flex">
            <a href="http://127.0.0.1:8000/Audio" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg"><span class="font-bold text-gray-800">Music</span></a>
            <a href="http://127.0.0.1:8000/royalty-free-sound-effects" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg"><span class="font-bold text-gray-800">Sound effects</span></a>
        </div>
    </span>
    <a href="http://127.0.0.1:8000/collections" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    Collections
</a>
    <a href="http://127.0.0.1:8000/Help" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    Help
</a>
</nav>
    </div>
    {{-- MOBILE MENU --}}
    <div class="hidden" class="fixed top-0 left-0 right-0 z-40 flex h-screen flex-col bg-white istock-six:hidden hidden">
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
        <div class="flex items-center rounded-lg" class="{ &#39;bg-gray-150&#39;: openVideos }">
            <a href="http://127.0.0.1:8000/stock-video-footage" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 xl:hidden" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path d="M9.48816 3.81992C9.3405 2.98594 8.61316 2.35156 7.73816 2.35156H2.05066C1.07175 2.35156 0.273315 3.15 0.273315 4.12891V9.87109C0.273315 10.85 1.07175 11.6484 2.05066 11.6484H7.73816C8.61316 11.6484 9.3405 11.0141 9.48816 10.1801V3.81992Z"></path><path d="M13.3849 3.89087C13.1743 3.76782 12.9118 3.76782 12.7013 3.89087L10.5822 5.11587V8.9057L12.7013 10.128C12.8079 10.1881 12.9255 10.2182 13.0431 10.2182C13.1607 10.2182 13.2782 10.1881 13.3849 10.128C13.5954 10.0049 13.7267 9.7807 13.7267 9.53461V4.48423C13.7267 4.23813 13.5954 4.01392 13.3849 3.89087Z"></path></svg>                Videos
</a>
            <button x-on:click="openVideos = ! openVideos" class="border-l border-gray-300 py-1 pl-4 pr-2">
                <svg class="fill-current h-5 w-5 rotate-90 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>            </button>
        </div>
        <div class="{ hidden: !openVideos }" class="flex flex-col pl-6 hidden">
            <a href="http://127.0.0.1:8000/stock-video-footage" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">All videos</a>
            <a href="http://127.0.0.1:8000/free-stock-footage" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Footage</a>
            <a href="http://127.0.0.1:8000/free-motion-graphics" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Motion graphics</a>
        </div>
    </div>
    <div class="relative px-4 py-1.5" x-data="{ openTemplates: false }">
        <div class="flex items-center rounded-lg" class="{ &#39;bg-gray-150&#39;: openTemplates }">
            <a href="http://127.0.0.1:8000/Template" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 xl:hidden" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><path d="M16.2422 4.70039V4.69688C16.2422 4.6793 16.2387 4.66172 16.2387 4.64414C16.2387 4.64063 16.2387 4.63359 16.2352 4.63008C16.2316 4.6125 16.2281 4.59141 16.2246 4.57383C16.2211 4.55625 16.2176 4.53516 16.2105 4.51758C16.2105 4.51406 16.207 4.50703 16.207 4.50352C16.2035 4.48594 16.1965 4.46836 16.1895 4.4543V4.45078C16.1824 4.4332 16.1754 4.41562 16.1684 4.39805C16.1648 4.39453 16.1648 4.3875 16.1613 4.38398C16.1543 4.36992 16.1473 4.35234 16.1402 4.33828C16.1402 4.33477 16.1367 4.33477 16.1367 4.33125C16.1297 4.31367 16.1191 4.29961 16.1086 4.28203C16.1051 4.27852 16.1016 4.27148 16.1016 4.26797C16.091 4.25391 16.084 4.23984 16.0734 4.22578L16.0699 4.22227C16.0594 4.2082 16.0453 4.19063 16.0348 4.17656C16.0313 4.17305 16.0277 4.16953 16.0242 4.16602C16.0102 4.15195 15.9996 4.13789 15.9855 4.12383L12.4699 0.608203C12.4559 0.594141 12.4418 0.580078 12.4277 0.569531C12.4242 0.566016 12.4207 0.5625 12.4172 0.558984C12.4031 0.548437 12.3891 0.534375 12.3715 0.523828C12.368 0.523828 12.368 0.520313 12.3645 0.520313C12.3504 0.509766 12.3363 0.499219 12.3223 0.492188C12.3187 0.488672 12.3117 0.485156 12.3082 0.481641C12.2941 0.471094 12.2766 0.464062 12.2625 0.453516C12.259 0.453516 12.2555 0.45 12.2555 0.45C12.2414 0.442969 12.2273 0.435937 12.2133 0.428906C12.2098 0.425391 12.2027 0.425391 12.1992 0.421875C12.1816 0.414844 12.1641 0.407812 12.15 0.400781C12.1465 0.400781 12.1465 0.400781 12.143 0.397266C12.1289 0.390234 12.1113 0.386719 12.0938 0.383203C12.0902 0.383203 12.0832 0.379688 12.0797 0.379688C12.0621 0.376172 12.0445 0.369141 12.027 0.365625H12.0234C12.0059 0.362109 11.9883 0.358594 11.9707 0.358594C11.9637 0.358594 11.9602 0.358594 11.9531 0.355078C11.9355 0.351563 11.918 0.351562 11.9039 0.351562C11.9004 0.351562 11.9004 0.351562 11.8969 0.351562C11.8828 0.351562 11.8688 0.351562 11.8547 0.351562H4.04297C2.78438 0.351562 1.75781 1.37813 1.75781 2.63672V15.3633C1.75781 16.6219 2.78438 17.6484 4.04297 17.6484H13.957C15.2156 17.6484 16.2422 16.6219 16.2422 15.3633V4.74609C16.2422 4.73203 16.2422 4.71797 16.2422 4.70039ZM13.957 15.8906H4.04297C3.75117 15.8906 3.51562 15.6551 3.51562 15.3633V2.63672C3.51562 2.34492 3.75117 2.10938 4.04297 2.10938H10.9688V4.74609C10.9688 5.23125 11.3625 5.625 11.8477 5.625H14.4844V15.3633C14.4844 15.6551 14.2488 15.8906 13.957 15.8906Z"></path><path d="M11.8477 7.38281H6.15234C5.66719 7.38281 5.27344 7.77656 5.27344 8.26172V13.2539C5.27344 13.7391 5.66719 14.1328 6.15234 14.1328H11.8477C12.3328 14.1328 12.7266 13.7391 12.7266 13.2539V8.26172C12.7266 7.77656 12.3328 7.38281 11.8477 7.38281ZM10.9688 12.375H7.03125V9.14062H10.9688V12.375Z"></path><path d="M6.1875 5.625H8.33203C8.81719 5.625 9.21094 5.23125 9.21094 4.74609C9.21094 4.26094 8.81719 3.86719 8.33203 3.86719H6.1875C5.70234 3.86719 5.30859 4.26094 5.30859 4.74609C5.30859 5.23125 5.70234 5.625 6.1875 5.625Z"></path></svg>                Templates
</a>
            <button x-on:click="openTemplates = ! openTemplates" class="border-l border-gray-300 py-1 pl-4 pr-2">
                <svg class="fill-current h-5 w-5 rotate-90 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512"><defs></defs><path d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z"></path></svg>            </button>
        </div>
        <div :class="{ hidden: !openTemplates }" class="flex flex-col pl-6 hidden">
            <a href="http://127.0.0.1:8000/video-editing-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg font-bold xl:bg-gray-150">All templates</a>
            <a href="http://127.0.0.1:8000/after-effects-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">After Effects templates</a>
            <a href="http://127.0.0.1:8000/premiere-pro-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Premiere Pro templates</a>
            <a href="http://127.0.0.1:8000/davinci-resolve-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">DaVinci Resolve templates</a>
            <a href="http://127.0.0.1:8000/final-cut-pro-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Final Cut Pro templates</a>
            <a href="http://127.0.0.1:8000/motion-graphics-templates" class="text-gray-800 py-2 pl-3 pr-6 whitespace-nowrap flex items-center hover:bg-gray-150 rounded-lg">Motion Graphics templates</a>
        </div>
    </div>
    <div class="px-4 py-1.5">
        <a href="http://127.0.0.1:8000/Audio" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 p-px xl:hidden" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.578 0.752131C6.32256 0.646311 6.02853 0.704826 5.83302 0.900307L3.29886 3.43447H1.77734C0.797316 3.43447 0 4.23179 0 5.21181V8.82119C0 9.80122 0.797316 10.5985 1.77734 10.5985H3.29889L5.83305 13.1327C6.02856 13.3282 6.32256 13.3867 6.57803 13.2809C6.83348 13.1751 7.00003 12.9258 7.00003 12.6493V1.38369C7 1.10722 6.83345 0.857951 6.578 0.752131ZM5.63281 10.9991L4.06541 9.43171C3.93723 9.30352 3.76335 9.2315 3.58203 9.2315H1.77734C1.55118 9.2315 1.36719 9.04751 1.36719 8.82135V5.21197C1.36719 4.98581 1.55118 4.80181 1.77734 4.80181H3.58203C3.76332 4.80181 3.9372 4.72979 4.06541 4.6016L5.63281 3.03418V10.9991ZM8.77734 12.2392C8.39981 12.2392 8.09375 11.9331 8.09375 11.5556C8.09375 11.1781 8.39981 10.872 8.77734 10.872C10.9033 10.872 12.6328 9.14246 12.6328 7.01654C12.6328 4.89062 10.9033 3.16107 8.77734 3.16107C8.39981 3.16107 8.09375 2.85501 8.09375 2.47748C8.09375 2.09994 8.39981 1.79388 8.77734 1.79388C11.6571 1.79388 14 4.13675 14 7.01654C14 9.89633 11.6571 12.2392 8.77734 12.2392ZM8.77734 9.50482C8.39981 9.50482 8.09375 9.19876 8.09375 8.82123C8.09375 8.44369 8.39981 8.13763 8.77734 8.13763C9.3955 8.13763 9.89844 7.6347 9.89844 7.01654C9.89844 6.39838 9.3955 5.89545 8.77734 5.89545C8.39981 5.89545 8.09375 5.58939 8.09375 5.21185C8.09375 4.83432 8.39981 4.52826 8.77734 4.52826C10.1494 4.52826 11.2656 5.64448 11.2656 7.01654C11.2656 8.38859 10.1494 9.50482 8.77734 9.50482Z"></path></svg>            Music
</a>
    </div>
    <div class="px-4 py-1.5">
        <a href="http://127.0.0.1:8000/royalty-free-sound-effects" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 p-px xl:hidden" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M20.1202143,11.0688896 C19.9916176,10.7181707 19.6928864,10.4857143 19.3389286,10.4857143 C18.9939471,10.4857143 18.67665,10.7077729 18.5470666,11.0955411 L17.4969177,14.2483969 L15.7319757,5.07275157 C15.6432177,4.60987347 15.2986832,4.33333333 14.9096429,4.33333333 C14.4924205,4.33333333 14.1390469,4.64553063 14.0726633,5.12578744 L12.5870974,15.8472742 L11.2070146,9.40281819 C11.1105702,8.95178445 10.7677335,8.68452381 10.385,8.68452381 C10.0206587,8.68452381 9.69381818,8.92717816 9.57837727,9.34445402 L8.29182875,14.0205753 L7.50795763,11.9611838 C7.37752625,11.6174539 7.0792676,11.3904762 6.72928571,11.3904762 C6.44411951,11.3904762 6.18906438,11.544319 6.03295091,11.7978366 L4.74225033,13.8571429 L2.53571429,13.8571429 C2.04761671,13.8571429 1.66666667,14.2804207 1.66666667,14.7857143 C1.66666667,15.2910079 2.04761671,15.7142857 2.53571429,15.7142857 L5.19714286,15.7142857 C5.48070356,15.7142857 5.74026583,15.5619221 5.89482186,15.310053 L6.55249238,14.267153 L7.64351083,17.1305876 C7.77508201,17.476633 8.06766243,17.7011905 8.41892857,17.7011905 C8.80310547,17.7011905 9.12006385,17.430115 9.22775274,17.0398578 L10.2845491,13.1979296 L11.9426182,20.9459442 C12.0406837,21.3994208 12.3749338,21.6666667 12.7614286,21.6666667 C13.1789643,21.6666667 13.5321397,21.3540822 13.5984292,20.8728697 L15.0412899,10.4597015 L16.4530211,17.8010416 C16.5393078,18.2506582 16.8861584,18.5416667 17.2807143,18.5416667 C17.6483058,18.5416667 17.9453664,18.3010721 18.0692054,17.9323069 L19.3748645,14.0162989 L20.5751519,17.2989923 C20.7037056,17.6495937 21.0035455,17.8821429 21.3575,17.8821429 C21.6402762,17.8821429 21.8952471,17.7296379 22.0502996,17.4788739 L23.210978,15.697619 L25.4728571,15.697619 C25.956669,15.697619 26.3333333,15.2791031 26.3333333,14.7785714 C26.3333333,14.2779477 25.9567247,13.8571429 25.4728571,13.8571429 L22.7707143,13.8571429 C22.4889028,13.8571429 22.2305569,14.0121285 22.0765685,14.2620473 L21.5625855,15.0146298 L20.1202143,11.0688896 Z"></path></svg>            Sound effects
</a>
    </div>
    <div class="px-4 py-1.5">
        <a href="http://127.0.0.1:8000/collections" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 p-px xl:hidden" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none" viewBox="0 0 24 24"><path d="M20 2H8c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zM8 16V4h12l.002 12H8z"></path><path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8zm11-2h-2v3h-3v2h3v3h2v-3h3V9h-3z"></path></svg>            Collections
</a>
    </div>
    <div class="px-4 py-1.5">
        <a href="http://127.0.0.1:8000/Help" class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
    <svg class="fill-current mr-3 h-5 w-5 xl:hidden" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.05023 11.9498C3.37236 13.2719 5.13023 14 7 14C8.86977 14 10.6276 13.2719 11.9498 11.9498C13.2719 10.6276 14 8.86977 14 7C14 5.13023 13.2719 3.37239 11.9498 2.05023C10.6276 0.728137 8.86977 0 7 0C5.13023 0 3.37236 0.728137 2.05023 2.05023C0.728137 3.37239 0 5.13023 0 7C0 8.86977 0.728137 10.6276 2.05023 11.9498ZM1.36719 7C1.36719 3.89405 3.89405 1.36719 7 1.36719C10.1059 1.36719 12.6328 3.89405 12.6328 7C12.6328 10.1059 10.1059 12.6328 7 12.6328C3.89405 12.6328 1.36719 10.1059 1.36719 7ZM7 9.07812C6.62246 9.07812 6.31641 8.77207 6.31641 8.39453V7.51953C6.31641 7.142 6.62246 6.83594 7 6.83594C7.75387 6.83594 8.36719 6.22262 8.36719 5.46875C8.36719 4.71488 7.75387 4.10156 7 4.10156C6.24613 4.10156 5.63281 4.71488 5.63281 5.46875C5.63281 5.84629 5.32675 6.15234 4.94922 6.15234C4.57168 6.15234 4.26562 5.84629 4.26562 5.46875C4.26562 3.96102 5.49224 2.73438 7 2.73438C8.50776 2.73438 9.73438 3.96102 9.73438 5.46875C9.73438 6.74054 8.86164 7.81233 7.68359 8.11661V8.39453C7.68359 8.77207 7.37754 9.07812 7 9.07812ZM6.17969 10.4453C6.17969 10.8976 6.54768 11.2656 7 11.2656C7.45232 11.2656 7.82031 10.8976 7.82031 10.4453C7.82031 9.99299 7.45232 9.625 7 9.625C6.54768 9.625 6.17969 9.99299 6.17969 10.4453Z"></path></svg>            Help
</a>
    </div>
</nav>
<div class="flex flex-col gap-2 p-4">
    <a href="http://127.0.0.1:8000/Log-in" class="flex w-full items-center justify-center rounded-lg bg-blue-400 py-3 font-bold text-white">
        Join Videvo    </a>
    <a href="http://127.0.0.1:8000/Log-in" class="flex w-full items-center justify-center rounded-lg bg-gray-200 py-3 font-bold text-gray-800">
        Log in    </a>
</div>
    </div>
</div>

        </div>
        <div class="flex items-center gap-2 order-2" class="{&#39;max-lg:mt-[13px]&#39;: openSearch}">
                            <a href="http://127.0.0.1:8000/Log-in" class="hidden rounded-lg border-2 border-white/50 py-1 px-3 font-bold text-white hover:border-white sm:block">
                    Join Videvo                </a>
                <a href="http://127.0.0.1:8000/Log-in" class="rounded-lg py-1 px-3 font-bold text-white/75 hover:text-white">
                    Log in                </a>
                    </div>
    </div>

    <div class="flex"></div>
</header>