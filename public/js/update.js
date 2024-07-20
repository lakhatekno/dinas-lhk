function updateData2024() {
  const dataToUpdate = [];
  document.querySelectorAll('.data2024').forEach(input => {
    const kode = input.getAttribute('data-kode');
    const slug = input.getAttribute('data-slug');
    const data2024 = input.value;
    const status = document.querySelector(`.status[data-kode="${kode}"][data-slug="${slug}"]`).value;

    dataToUpdate.push({
        kode: kode,
        slug: slug,
        data2024: data2024,
        status: status
    });
  });

  axios.post(`/dataku/${slug}/update`, {
    data: dataToUpdate
  })
  .then(response => {
      console.log('Data updated successfully');
  })
  .catch(error => {
      console.error('Error updating data:', error);
  });
}