$(".btn").click(function () {
  $(this).toggleClass("click");
  $(".sidebar").toggleClass("show");
});
$(".btn-primero").click(function () {
  $("nav ul .mostrar-primero").toggleClass("show");
  $("nav ul .primero").toggleClass("rotate");
});
$(".btn-segundo").click(function () {
  $("nav ul .mostrar-segundo").toggleClass("show1");
  $("nav ul .segundo").toggleClass("rotate");
});

function mostrarOcultar(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
    x.style.paddingLeft = "50px";
  } else {
    x.style.display = "none";
  }
}
function desplegar(id) {
  var element = document.getElementById(id);
  if (element.classList.contains("hidden")) {
    element.classList.remove("hidden");
  } else {
    element.classList.add("hidden");
  }
}

// MercadoPAgo
const mercadopago = new MercadoPago(
  "TEST-7974c20d-fa00-4255-862b-e71bf2323207",
  {
    locale: "es-CL",
  }
);

document.getElementById("submitButton").addEventListener("click", function () {
  const orderData = {
    quantity: 1,
    description: "COnsulta presencial con la psicóloga Pía Cruz",
    price: 1,
  };

  fetch("http://localhost/create_preference", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(orderData),
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (preference) {
      createCheckoutButton(preference.id);
    })
    .catch(function () {
      alert("Unexpected error");
    });
});

function createCheckoutButton(preferenceId) {
  // Initialize the checkout
  const bricksBuilder = mercadopago.bricks();

  const renderComponent = async (bricksBuilder) => {
    if (window.checkoutButton) window.checkoutButton.unmount();
    await bricksBuilder.create(
      "wallet",
      "button-checkout", // class/id where the payment button will be displayed
      {
        initialization: {
          preferenceId: preferenceId,
        },
        callbacks: {
          onError: (error) => console.error(error),
          onReady: () => {},
        },
      }
    );
  };
  window.checkoutButton = renderComponent(bricksBuilder);
}
