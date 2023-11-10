/* eslint-disable linebreak-style */
/* eslint-disable import/prefer-default-export */
export const createError = (status, message) => {
  const error = new Error();
  error.status = status;
  error.message = message;
};
