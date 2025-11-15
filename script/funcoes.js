function mudarPlano(plano) {
    document.getElementById("nome_plano").value = plano;
}

function mudarParcelas(plano) {
    let parcelas = document.getElementById("parcelas");

    if (plano === "com_anuncios") {
        parcelas.innerHTML = `
            <option value="1x de R$ 274,80">1x de R$ 274,80</option>
            <option value="3x de R$ 91,60">3x de R$ 91,60</option>
            <option value="6x de R$ 45,80">6x de R$ 45,80</option>
            <option value="12x de R$ 22,90">12x de R$ 22,90</option>
        `;
    } 
    else if (plano === "standard") {
        parcelas.innerHTML = `
            <option value="1x de R$ 418,80">1x de R$ 418,80</option>
            <option value="3x de R$ 139,60">3x de R$ 139,60</option>
            <option value="6x de R$ 69,80">6x de R$ 69,80</option>
            <option value="12x de R$ 34,90">12x de R$ 34,90</option>
        `;
    } 
    else if (plano === "platinum") {
        parcelas.innerHTML = `
            <option value="1x de R$ 538,80">1x de R$ 538,80</option>
            <option value="3x de R$ 179,60">3x de R$ 179,60</option>
            <option value="6x de R$ 89,80">6x de R$ 89,80</option>
            <option value="12x de R$ 44,90">12x de R$ 44,90</option>
        `;
    }
}




