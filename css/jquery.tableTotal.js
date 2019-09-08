/* globals $*/

$.fn.tableTotal = function tableTotal(args) {
  const $headerRow = this.find('thead tr');
  const $tbody = this.find('tbody');
  const $rows = this.find('tbody tr');
  const $totalHeaderCell = $('<th class="center">Total</th>');
  const $totalRow = $('<tr id="last"></tr>');
  const $grandTotalCell = $('<td></td>');
  const colTotals = [];
  const userOptions = args || {};
  let grandTotal = 0;

  const o = {
    totalRow: false,
    totalCol: true,
    bold: true,
  };

  $.extend(o, userOptions);

  if (o.totalCol) {
    $headerRow.append($totalHeaderCell);
  }

  $rows.each(function eachRow() {
    const $row = $(this);
    const $cells = $row.find('td');
    const $totalCell = $('<td></td>');
    let rowTotal = 0;

    $cells.each(function eachCell(i) {
      const $cell = $(this);

      if ($.isNumeric($cell.text())) {
        const n = +$cell.text();

        if (typeof colTotals[i] === 'undefined') {
          colTotals[i] = 0;
        }
        if(isNaN(colTotals[i])) {
           colTotals[i] = 0;
          }
        rowTotal += n;
        colTotals[i] += n;
      }
    });

    if (o.totalCol) {
      if (o.bold) {
        $totalCell.css('font-weight', 'bold');
      }

      $totalCell.text(rowTotal);
      $row.append($totalCell);
    }
  });

  if (o.totalRow) {
    let i;

    // $totalRow.append('<td>Grand Total</td>');

    for (i = 0; i < colTotals.length; i += 1) {
      const $cell = $('<td></td>');

      grandTotal += colTotals[i] ||0;


      $cell.text(colTotals[i]);
      $totalRow.append($cell);
    }

    if(grandTotal==0)
    {
      $totalRow.append('<td>Grand Total</td>');
    }
    else{
      $grandTotalCell.text(grandTotal);
    }

    if (o.totalCol) {
      $totalRow.append($grandTotalCell);
    }

    if (o.bold) {
      $totalRow.css('font-weight', 'bold');
    }

    $tbody.append($totalRow);
  }

  return this;
};
