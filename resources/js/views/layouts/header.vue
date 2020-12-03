<template>
  <div>
          <header>
            <div class="logo">
              <h3>LOGO</h3>
            </div>

            <nav>
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                  <router-link  class="nav-link"   :to="{name: 'Home'}">Home  </router-link>
                  </li>
                  <li class="nav-item">
                  <router-link  class="nav-link" :to="{name: 'About'}" >About</router-link>
                  </li>
                  <li class="nav-item">
                  <router-link  class="nav-link" :to="{name: 'Contact'}">Contact</router-link>
                  </li>
                  <li class="nav-item">
                  <router-link  class="nav-link" :to="{name: 'Help'}">Help</router-link>
                  </li>
                  </ul>
            </nav>
          </header>
  </div>
</template>

<script>
  export default {

  }
</script>

<style lang="scss" scoped>

</style>
