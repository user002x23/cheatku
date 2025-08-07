const { createReadStream } = require('fs');
const { join } = require('path');

module.exports = (req, res) => {
  const filePath = join(__dirname, '../public/cheat.cbm');
  const randomName = `${Math.floor(10000000 + Math.random() * 90000000)}.cbm`;
  
  res.setHeader('Content-Type', 'application/octet-stream');
  res.setHeader('Content-Disposition', `attachment; filename="${randomName}"`);
  
  createReadStream(filePath).pipe(res);
};
