import { ZodFirstPartySchemaTypes } from 'zod';
import { spec, settings } from 'pactum';
import { GetHealthRequest } from './health.resource';

settings.setJsonSchemaAdapter({
  validate: (schema: ZodFirstPartySchemaTypes, data) => {
    try {
      schema.parse(data);
    } catch (error: unknown) {
      console.log('Error', JSON.stringify(data, null, 2));
      throw error;
    }
  },
});

describe('Health resource', () => {
  it ('should match the schema', async () => {
    await spec()
      .get('http://127.0.0.1:8081/health')
      .expectJsonSchema(GetHealthRequest)
  })
})
