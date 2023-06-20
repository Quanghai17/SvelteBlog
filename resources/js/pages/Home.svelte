<script>
    import { onMount } from "svelte";
    import Container from "../components/Container.svelte";
    import { user } from "../stores/auth";

    let posts = []
    let loading = false

    const fetchPosts = async () => {
        try {
            if (loading) return
            loading = true

            const res = await fetch('/api/posts')
            if (!res.ok) throw ""

            const body = await res.json()

            posts = body.data
        } catch (error) {

            posts = []
        } 
        finally {
            loading = false
        }
    }

    onMount(async () => {
        console.log(1)
        await fetchPosts()
    })

</script>

<Container class="mt-8">
    {#if loading}
        <p>loading ...</p>
    {:else}
        <div class="grid grid-cols-3 gap-6">
            {#each posts as post}
                <div class="border bg-white p-4 shadow rounded">{post.name}</div>
            {/each}
        </div>
    {/if}
</Container>