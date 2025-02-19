// step script
document.addEventListener("DOMContentLoaded", function () {
    const steps = document.querySelectorAll("[data-step]");
    const contents = document.querySelectorAll("[data-content]");

    function updateStepAndContent(index) {
        steps.forEach((s) => {
            s.querySelector("span:first-child").classList.remove(
                "tw-bg-blue-600",
                "tw-text-white"
            );
        });
        const currentStep = document.querySelector(
            `[data-step='${index}'] span:first-child`
        );
        currentStep.classList.add("tw-bg-blue-600", "tw-text-white");

        contents.forEach((content) => (content.style.display = "none"));
        document.querySelector(`[data-content='${index}']`).style.display =
            "flex";
    }

    updateStepAndContent(1);

    steps.forEach((step) => {
        step.addEventListener("click", function () {
            const index = this.getAttribute("data-step");
            updateStepAndContent(index);
        });
    });
});
