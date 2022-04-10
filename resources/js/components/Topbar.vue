<template>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="vendor/adminlte/dist/img/logo.png" alt="webapp logo"/>
      <!-- router-link class="navbar-brand" to="/">{{ title }}</router-link -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link class="nav-link" to="/">Home <span class="sr-only">(current)</span></router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'contacts' }">Contacts</router-link>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: "Navbar",
};
</script>

<style lang="scss" scoped>
img {
  width: 50px;
  height: auto;
}
a {
  text-decoration: none;
  color: #6cb2eb;
  border-bottom: 1px solid transparent;
}
a.active {
  color: #0e68b1;
  border-bottom: 1px solid currentColor;
}
</style>
