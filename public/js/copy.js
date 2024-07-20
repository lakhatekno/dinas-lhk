function copyData2024() {
  const dataToUpdate = [];
  document.querySelectorAll('.data2024').forEach(input => {
    const kode = input.getAttribute('data-kode');
    const slug = input.getAttribute('data-slug');
    const data2024 = input.value;

    dataToUpdate.push({
        kode: kode,
        slug: slug,
        data2024: data2024
    });
  });

  axios.post(`/dataku/${slug}/copy-to-2025`, {
    data: dataToUpdate
  })
  .then(response => {
      alert('Data berhasil disalin ke tahun 2025!')
  })
  .catch(error => {
      console.error('Error updating data:', error);
  });
}