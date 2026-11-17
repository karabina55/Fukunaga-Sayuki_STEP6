const fields =[
    { name: "name", label: "お名前" },
    { name: "companyName", label: "会社名" },
    { name: "email", label: "メールアドレス" },
    { name: "age", label: "年齢" },
    { name: "message", label: "お問い合わせ内容" },
];
const confirmForm = document.querySelector('form[action="send.php"]');

if (confirmForm) {
    confirmForm.addEventListener("submit", (event) => {
    const values = fields.map(({name}) => {
        const input =  confirmForm.elements.namedItem(name);
        return input ? input.value : "";
    });

    if (values.some((value) => value.trim() === "")) {
        event.preventDefault();
        alert("必須項目が未入力です。入力内容をご確認ください。");
        return;
    }

    const details = fields
    .map(({ label }, index) => `${label} ➡️ ${values[index]}`)
    .join("\n");

    if (!confirm(`下記の内容を本当に送信しますか？\n\n${details}`)) {
        event.preventDefault();
    }
    });
}

const colorButton= document.getElementById("colorButton");
const footer = document.querySelector("footer");

if (colorButton && footer) {
    const colors = ["blue", "red", "yellow", "gray"];
    let index = 0;

    colorButton.addEventListener("click", () => {
    footer.style.backgroundColor = colors[index];
    index = (index + 1) % colors.length;
});
}

