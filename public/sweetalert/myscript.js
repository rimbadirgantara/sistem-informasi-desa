

const Berhasil = $('.berhasil').data('flashdata');
if (Berhasil) {
	Swal.fire({
		title: 'Sukses !',
		text: Berhasil,
		icon: 'success'
	});
}

const Gagal = $('.gagal').data('flashdata');
if (Gagal) {
	Swal.fire({
		title: 'Gagal !',
		text: Gagal,
		icon: 'error'
	});
}

const MaintenanceBlog = $('.Maintenance-blog').data('flashdata');
if (MaintenanceBlog) {
	Swal.fire({
		title: 'Maintenance!',
		text: 'Maaf bro.. blog nya lagi maintenance, sabar yak :>.',
		imageUrl: '/assets/front_panel_baru/assets/img/maintenance.gif',
		imageWidth: 400,
		imageHeight: 200,
		imageAlt: 'maintenance',
		confirmButtonText: 'Ok bro gpp, sans aja'
	})
}
