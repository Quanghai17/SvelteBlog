<script>
    import { Router, Link, Route, links  } from "svelte-routing";
    import Home from "./pages/Home.svelte";
    import About from "./pages/About.svelte";
    import Header from "./components/Header.svelte";
    import Login from "./pages/Login.svelte";
</script>

<!-- <div use:links> -->
    <Router>
        <Header />
        <div>
            <Route path="/"><Home /></Route>
            <Route path="/about"><About /></Route>
            <Route path="/login"><Login /></Route>
        </div>
    </Router>
<!-- </div> -->