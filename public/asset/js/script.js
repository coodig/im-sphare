// 🌙 Theme Toggle with Local Storage
function toggleTheme() {
    //   document.body.classList.toggle("dark-theme");

    // Save preference
    //   if (document.body.classList.contains("dark-theme")) {
    //     localStorage.setItem("theme", "dark");
    //   } else {
    //     localStorage.setItem("theme", "light");
    //   }
    const current = localStorage.getItem("theme") === "dark" ? "light" : "dark";
    setTheme(current);
}

function setTheme(theme) {
    if (theme === "dark") {
        document.body.classList.add("dark-theme");
    } else {
        document.body.classList.remove("dark-theme");
    }
    localStorage.setItem("theme", theme);

    const dropdown = document.getElementById("theme");
    if (dropdown) {
        dropdown.value = theme;
    }
}

// Apply theme on load
window.addEventListener("DOMContentLoaded", () => {
    // Apply saved theme
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-theme");
    }

    // Apply saved sidebar state
    const sidebar = document.querySelector(".sidebar");
    const mainWrapper = document.querySelector(".main-wrapper");
    const navbar = document.querySelector(".custom-navbar");
    const footer = document.querySelector(".footer");
    const toggleBtn = document.getElementById("toggleSidebar");

    if (localStorage.getItem("sidebar-collapsed") === "true") {
        sidebar.classList.add("collapsed");
        mainWrapper.classList.add("collapsed");
        navbar.classList.add("collapsed");
        footer.classList.add("collapsed");
        toggleBtn.classList.add("rotate");
    }

    // Sidebar toggle click
    toggleBtn.addEventListener("click", function () {
        sidebar.classList.toggle("collapsed");
        mainWrapper.classList.toggle("collapsed");
        navbar.classList.toggle("collapsed");
        footer.classList.toggle("collapsed");
        this.classList.toggle("rotate");

        // Save sidebar state
        const isCollapsed = sidebar.classList.contains("collapsed");
        localStorage.setItem("sidebar-collapsed", isCollapsed);
    });
});

function copyAPIKey() {
    let apiKey = document.getElementById("apiKeyBox").innerText;
    navigator.clipboard.writeText(apiKey).then(() => {
        alert("API key copied to clipboard!");
    });
}

// function fullScreen() {
//     const icon = document.getElementById("fullScreenIcon");

//     if (!document.fullscreenElement) {
//         document.documentElement
//             .requestFullscreen()
//             .then(() => {
//                 icon.setAttribute(
//                     "icon",
//                     "solar:minimize-square-2-bold-duotone"
//                 );
//                 localStorage.setItem("isFullscreen", "true");
//             })
//             .catch((err) => {
//                 console.error(
//                     `Error attempting to enable full-screen mode: ${err.message}`
//                 );
//             });
//     } else {
//         document.exitFullscreen().then(() => {
//             icon.setAttribute("icon", "solar:full-screen-square-bold-duotone");
//             localStorage.setItem("isFullscreen", "false");
//         });
//     }
// }

// window.addEventListener("load", () => {
//     const icon = document.getElementById("fullScreenIcon");

//     if (
//         localStorage.getItem("isFullscreen") === "true" &&
//         !document.fullscreenElement
//     ) {
//         document.documentElement.requestFullscreen().then(() => {
//             icon.setAttribute("icon", "solar:minimize-square-2-bold-duotone");
//         });
//     }
// });

function fullScreen() {
    const icon = document.getElementById("fullScreenIcon");

    if (!document.fullscreenElement) {
        document.documentElement
            .requestFullscreen()
            .then(() => {
                icon.setAttribute(
                    "icon",
                    "solar:minimize-square-2-bold-duotone"
                );
                localStorage.setItem("isFullscreen", "true");
            })
            .catch((err) => {
                console.error(
                    `Error enabling full-screen mode: ${err.message}`
                );
            });
    } else {
        document.exitFullscreen().then(() => {
            icon.setAttribute("icon", "solar:full-screen-square-bold-duotone");
            localStorage.setItem("isFullscreen", "false");
        });
    }
}

window.addEventListener("load", () => {
    const icon = document.getElementById("fullScreenIcon");
    // const continueBtn = document.getElementById("continueFullscreenBtn");

    if (
        localStorage.getItem("isFullscreen") === "true" &&
        !document.fullscreenElement
    )
        //  {
        //     continueBtn.style.display = "inline-block";
        // }

        continueBtn.addEventListener("click", () => {
            document.documentElement.requestFullscreen().then(() => {
                icon.setAttribute(
                    "icon",
                    "solar:minimize-square-2-bold-duotone"
                );
                // continueBtn.style.display = "none";
            });
        });
});

function getGeolocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;
                const locationText = `Latitude: ${latitude}, Longitude: ${longitude}`;
                console.log(locationText);
                document.getElementById("locationDisplay").innerText =
                    locationText;
            },
            (error) => {
                console.error("Error fetching location:", error.message);
                document.getElementById("locationDisplay").innerText =
                    "Error" + error.message;
            }
        );
    } else {
        console.log("Geolocation is not supported by this browser.");
        document.getElementById("locationDisplay").innerText =
            "Geolocation is not supported by this browser.";
    }
}

$(document).ready(function () {
    $("#privacy_level_id").on("change", function () {
        $.ajax({
            url: "{{ route('privacy.update') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                privacy_level_id: $(this).val(),
            },
            success: function (response) {
                console.log(response.message);
                alert("Privacy updated: " + response.privacy_level);
            },
            error: function (xhr) {
                console.error(
                    xhr.responseJSON?.message || "somethng went wrong"
                );
            },
        });
    });
});
