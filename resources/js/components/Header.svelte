<script>
    import { Link } from "svelte-routing";
import Container from "./Container.svelte";
    import { user } from "../stores/auth";

    let menu = [
        {
            name: 'Trang chu',
            path: '/'
        },
        {
            name: 'Gioi Thieu',
            path: '/about'
        }
    ]
</script>

<header class="w-full px-8 py-2 bg-white border-b shadow">
    <Container class="flex items-center space-x-4">
        <div class="logo text-2xl ">Logo</div>

        <div class="!ml-auto"></div>
        {#each menu as item}
            <Link to={item.path} let:active>
                <div class="px-4 py-3 hover:bg-blue-100 rounded {active ? 'bg-blue-100' : ''}">{item.name}</div>
            </Link>
        {/each}

        {#if !$user}
            <Link to='/login' let:active>
                <div class="px-4 py-3 hover:bg-blue-100 rounded {active ? 'bg-blue-100' : ''}">Login</div>
            </Link>
        {:else}
            <div class="flex items-center space-x-2 bg-gray-200 hover:bg-gray-300 p-1 rounded-full cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-green-500"></div>
                <span class="pl-r">{$user.name}</span>
            </div>
        {/if}
    </Container>
</header>