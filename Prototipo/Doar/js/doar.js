// Função para adicionar um novo animal
function addAnimal() {
    var nome = document.getElementById("nome").value;
    var idade = document.getElementById("idade").value;
    var sexo = document.getElementById("sexo").value;
    var peso = document.getElementById("peso").value || "Não informado";
    var imagemInput = document.getElementById("imagem");
    var imagem = null;
  
    // Verificar se uma imagem foi selecionada
    if (imagemInput.files.length > 0) {
      imagem = URL.createObjectURL(imagemInput.files[0]);
    }
  
    // Criar um objeto com as informações do animal
    var animal = { nome: nome, idade: idade, sexo: sexo, peso: peso, imagem: imagem };
  
    // Adicionar o animal à lista de animais
    saveAnimal(animal);
  
    // Limpar os campos do formulário
    limparCampos();
  
    // Atualizar a lista de animais exibidos
    exibirAnimais();
  }
  
  // Função para salvar o animal no armazenamento local do navegador
  function saveAnimal(animal) {
    var animais = JSON.parse(localStorage.getItem("animais")) || [];
    animais.push(animal);
    localStorage.setItem("animais", JSON.stringify(animais));
  }
  
  // Função para limpar os campos do formulário após adicionar um animal
  function limparCampos() {
    document.getElementById("nome").value = "";
    document.getElementById("idade").value = "";
    document.getElementById("sexo").value = "macho";
    document.getElementById("peso").value = "";
    document.getElementById("imagem").value = "";
  }
  
  // Função para exibir os animais registrados
  function exibirAnimais() {
    var animais = JSON.parse(localStorage.getItem("animais")) || [];
    var listaAnimais = document.getElementById("animais");
    listaAnimais.innerHTML = "";
  
    animais.forEach(function(animal) {
      var li = document.createElement("li");
      li.innerHTML += `<h2>${animal.nome}</h2><br> <p>${animal.idade} anos<br>  ${animal.sexo}<br>  Peso: ${animal.peso}<br></p>`;
      
      // Adicionar a imagem, se disponível
      if (animal.imagem) {
        var img = document.createElement("img");
        img.src = animal.imagem;
        img.alt = animal.nome;
        img.width = 100; // Defina o tamanho desejado para a imagem
        li.appendChild(img);
      }
      
      listaAnimais.appendChild(li);
    });
  }
  
  // Exibir os animais quando a página é carregada
  exibirAnimais();
  