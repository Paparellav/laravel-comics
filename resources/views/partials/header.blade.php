<header class="header">
  <div class="header__container">
    <div class="header__logo">
      <img src="../assets/img/dc-logo.png" alt="" />
    </div>
    <nav>
      <ul class="header__menu">
        <li
          v-for="(element, index) in menuArray"
          :key="index"
          :class="element.active === true ? 'active' : ''"
          @click="checkCurrentSection(index)"
        >
          <a href="">{{ element.text }}</a>
        </li>
      </ul>
    </nav>
  </div>
</header>