const fields =[
    {id: "name", label: "お名前"},
    {id: "companyName", label: "会社名"},
    {id: "email", label: "メールアドレス"},
    {id: "age", label: "年齢"},
    {id: "message", label: "お問い合わせ内容"},
];
const form = document.querySelector("form");

form.addEventListener("submit", (event) => {
    const inputs = fields.map(({id}) => document.getElementById(id));

    if (inputs.some((input) => !input || input.value.trim() === "")) {
        event.preventDefault();
        alert("必須項目が未入力です。入力内容をご確認ください。");
        return;
    }

    const details = fields
    .map(({label, id}) => `${label} ➡️ ${document.getElementById(id).value}`)
    .join("\n");

    if (!confirm(`下記の内容を本当に送信しますか？\n\n${details}`)) {
        event.preventDefault();
    }
    });

const colors = ["blue", "red", "yellow", "gray"];
let index = 0;

const button= document.getElementById("colorButton");
const footer = document.querySelector('footer');

if (button && footer) {
button.addEventListener("click", function () {
    footer.style.backgroundColor = colors[index];
    index = (index + 1) % colors.length;
});
}

