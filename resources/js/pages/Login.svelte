<script>
    import Container from "../components/Container.svelte";
    import { Input, Label, Helper, Checkbox, Button, A, Spinner } from 'flowbite-svelte';
    import { user } from "../stores/auth";
    import { navigate } from "svelte-routing";

    let email = 'fsdf fsdf'
    let error = ''
    let loading = false

    const login = async (e) => {
        if (loading) return
        loading = true
        const { email, password} = Object.fromEntries(new FormData(e.target));
        
        await new Promise(res => setTimeout(() => {
            res(1)
        }, 700))
        
        if (email == 'admin@admin.com' && password == "password") {
            $user = {
                id: 1,
                email,
                name: 'Admin'
            }
            error = ''
            navigate("/home", { replace: true });
        }
        else {
            error = 'Ten dang nhap hoac mat khau khong chinh xac'
        }
        loading = false
    }
</script>

<Container class="mt-8">
    <form class="w-full max-w-2xl mx-auto relative" on:submit|preventDefault={login}>
        <h1 class="text-3xl text-center pb-8">Login</h1>
        <div class="mb-6">
            <Label for="email" class="mb-2">Email address</Label>
            <Input
                type="email"
                id="email"
                name="email"
                placeholder="john.doe@company.com"
                required
            />
        </div>
        <div class="mb-6">
            <Label for="password" class="mb-2">Password</Label>
            <Input
                type="password"
                id="password"
                name="password"
                placeholder="•••••••••"
                required
            />
            {#if error != ''}
                <Helper class="mt-2" color="red"><span class="font-medium">Oh, snapp!</span> Some error message.</Helper>
            {/if}
        </div>

        {#if loading}
            <div class="absolute w-full h-full left-0 top-0 grid place-items-center bg-white/70">
                <Spinner size={10} />
            </div>
        {/if}
       
        <Checkbox class="mb-6 space-x-1">Remember me.</Checkbox>
        <Button type="submit">Submit</Button>
    </form>
</Container>
