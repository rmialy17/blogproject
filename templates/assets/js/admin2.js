function showModal(id){

	// $('#myModal').modal(.textContent=comment;);
	let comment=document.getElementById('popup_'+id).value;
	document.querySelector('.modal-dialog').style.display='block';
	document.querySelector('.modal-body').textContent=comment;

}

function closeModal(){
	document.querySelector('.modal-dialog').style.display='none';
	document.querySelector('.modal-body').textContent='';
}

// $('#myModal').modal({
//   backdrop: true | false | 'static',
//   keyboard: true | false,
//   show: true | false,
//   remote: 'remote.html' | false
// })

// $('#myModal').modal('show');


