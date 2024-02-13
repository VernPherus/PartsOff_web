export default function currencyPHP(value) {
  return new Intl.NumberFormat('fil-PH', {style: 'currency', currency: 'PHP'})
    .format(value);
}
