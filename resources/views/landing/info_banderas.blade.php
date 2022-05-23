<style>
    @import url("https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css");/*
@import url("https://fonts.googleapis.com/css2?family=Jura:wght@500;600;900&display=swap");*/

.banderas_info  {/*
  --color: rgba(30, 30, 30);
  --bgColor: rgba(245, 245, 245);
  min-height: 100vh;

  display: grid;
  align-content: center;
  gap: 2rem;
  padding: 2rem;

  font-family: "Jura", sans-serif;
  color: var(--color);
  background: var(--bgColor);*/
}

.banderas_info h1 {
  text-align: center;
}

.banderas_info ul {
  --col-gap: 2rem;
  --barH: 1rem;
  --roleH: 2rem;
  --flapH: 2rem;

  width: min(60rem, 90%);
  margin-inline: auto;

  display: flex;
  flex-wrap: wrap;

  gap: var(--col-gap);
  padding-inline: calc(var(--col-gap) / 2);

  justify-content: center;
  align-items: flex-start;
  list-style: none;
}
.banderas_info ul li {
  width: 10em;
  display: grid;
  grid-template:
    "role"
    "icon"
    "title"
    "descr";
  align-items: flex-start;
  gap: 1rem;
  padding-block-end: calc(var(--flapH) + 1rem);
  text-align: center;
  background: var(--accent-color);
  background-image: linear-gradient(
    rgba(0, 0, 0, 0.6) var(--roleH),
    rgba(0, 0, 0, 0.4) calc(var(--roleH) + 0.5rem),
    rgba(0, 0, 0, 0) calc(var(--roleH) + 0.5rem + 5rem)
  );
  clip-path: polygon(
    calc(var(--col-gap) / -2 - 5px) 0,
    calc(100% + var(--col-gap) / 2 + 5px) 0,
    calc(100% + var(--col-gap) / 2 + 5px ) calc(100% - var(--flapH)),
    50% 100%,
    calc(var(--col-gap) / -2 - 5px) calc(100% - var(--flapH))
  );
}

/* bar */
.banderas_info ul li::before {
  content: "";
  grid-area: role;
  height: var(--barH);
  width: calc(100% + var(--col-gap));
  margin-left: calc(var(--col-gap) / -2);
  margin-top: calc(var(--roleH) / 2 - var(--barH) / 2);
  background: grey;
  z-index: -1;
  background-image: linear-gradient(
    rgba(255, 255, 255, 0.4),
    rgba(255, 255, 255, 0.2) 30%,
    rgba(255, 255, 255, 0.1) 40%,
    rgba(0, 0, 0, 0.1) 60%,
    rgba(0, 0, 0, 0.2) 70%,
    rgba(0, 0, 0, 0.4)
  );
}

/* role */
.banderas_info ul li::after {
  content: "";
  grid-area: role;
  background: var(--accent-color);
  background-image: linear-gradient(
    rgba(255, 255, 255, 0.4),
    rgba(255, 255, 255, 0.2) 30%,
    rgba(255, 255, 255, 0.1) 40%,
    rgba(0, 0, 0, 0.1) 60%,
    rgba(0, 0, 0, 0.2) 70%,
    rgba(0, 0, 0, 0.4)
  );
  height: var(--roleH);
}

.banderas_info ul li .icon,
.banderas_info ul li .title,
.banderas_info ul li .descr {
  padding-inline: 1rem;
  color: white;
  text-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.5);
}

.banderas_info ul li .icon {
  font-size: 3rem;
}
.banderas_info ul li .title {
  font-size: 1.25rem;
  font-weight: 700;
}

.banderas_info ul li .descr {
  font-size: 0.9rem;
}

.banderas_info .credits {
  position: fixed;
  bottom: 1rem;
  right: 1rem;
}
.banderas_info .credits a {
  color: var(--color);
}

</style>

<div class="banderas_info">
    <h1>Inicia ahora</h1>
<ul>
    <li style="--accent-color:#0B374D">
        <div class="icon"><i class="fa-brands fa-codepen"></i></div>
        <div class="title">Codepen</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, impedit?</div>
    </li>
    <li style="--accent-color:#1286A8">
        <div class="icon"><i class="fa-brands fa-html5"></i></div>
        <div class="title">HTML 5</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
    </li>
    <li style="--accent-color:#D2B53B">
        <div class="icon"><i class="fa-brands fa-css3"></i></div>
        <div class="title">Publica tu servicio</div>
        <div class="descr">Si eres trabajador o tienes algun negocio pequeño, puedes ofrecer tus servicios y trabajo para que tus clientes te puedan contactar, y no te falte el trabajo</div>
    </li>
    <li style="--accent-color:#DA611E">
        <div class="icon"><i class="fa-brands fa-js"></i></div>
        <div class="title">Crea tu tienda virtual</div>
        <div class="descr">Si creas tu tienda ahora, podras compartir tu url con conocidos, y futuros clientes, que esperas para empezar :)</div>
    </li>
    <li style="--accent-color:#AC2A1A">
        <div class="icon"><i class="fa-brands fa-github"></i></div>
        <div class="title">Compra y vende rapido</div>
        <div class="descr">Con tu tienda virtual podras vender y comprar de manera rapida</div>
    </li>
</ul>
</div>
