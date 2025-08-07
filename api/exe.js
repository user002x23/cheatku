const fs = require('fs');
const path = require('path');

module.exports = (req, res) => {
  const filePath = path.join(__dirname, '../public/datacheat.exe');
  const randomName = `${Date.now()}.cbm`;
  
  res.setHeader('Content-Type', 'application/octet-stream');
  res.setHeader('Content-Disposition', `attachment; filename="${randomName}"`);
  
  fs.createReadStream(filePath).pipe(res);
};
