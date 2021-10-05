$(function()
{
	$("#from_cadeau").validate(
		{

		rules: {
			nom:  {
				required: true,
				minlength: 2
			},
			prix: {
				required: true,
				number: true
			}
		},

		messages: {
			nom: {
				required: "Champ obligatoire",
				minlength: " Le nom doit contenir au moins 2 caractères",
			},
			prix: {
				required: "Champ obligatoire",
				number: " Le Prix doit contenir des numeros",
			},
		}
	});
});